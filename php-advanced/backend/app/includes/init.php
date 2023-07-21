<?php
use includes\Db;
use includes\Audit;
use includes\Lang;
use includes\Login;
use includes\Api;
use includes\Template;
use includes\Adm;
use includes\Bootstrap;


/* Init settings
 * Loads config ini file
 * Declares constants associated
 * Sets the default timezone
 */
$config = parse_ini_file( SITE_PATH . '/includes/config.ini' ); 

define( 'SITE_TITLE',     $config[ 'title' ] );
define( 'SITE_EMAIL',     $config[ 'email' ] );
define( 'SITE_LANGUAGES', $config[ 'lang' ] );
define( 'SITE_CHARSET',   $config[ 'charset' ] );
define( 'SITE_BLOCKIP',   $config[ 'blockip' ] );
define( 'SITE_BLOCKUSER', $config[ 'blockuseraccess' ] );
define( 'SITE_VERSION',   $config[ 'version' ] );
define( 'SITE_DEBUG',     $config[ 'debug' ] );
define( 'SITE_COOKIE',    $config[ 'cookieName' ] );
define( 'SITE_DBASE',     $config[ 'dbbase' ] );
define( 'SITE_MAXFILE_UPLOADKB',     $config[ 'maxfile' ] );
define( 'SITE_MAXFILE_UPLOADMB',     $config[ 'maxfile' ] /1000 );
define( 'SITE_PUBLIC_RECAPTCHA_KEY',     $config[ 'public_recaptcha_key' ] );
define( 'SITE_SECRET_RECAPTCHA_KEY',     $config[ 'secret_recaptcha_key' ] );

date_default_timezone_set( $config['defaultTimezone'] );


/* Tool classes
 * Loads usefull classes which can be used for common functions
 * see the documentation for explicit explanations
 */
require_once( SITE_PATH . '/includes/tools/File.class.php' );
require_once( SITE_PATH . '/includes/tools/Date.class.php' );
require_once( SITE_PATH . '/includes/tools/String.class.php' );
require_once( SITE_PATH . '/includes/tools/Orm.class.php' );
require_once( SITE_PATH . '/includes/tools/Upload.class.php' );
require_once( SITE_PATH . '/includes/tools/Mail.class.php' );
require_once( SITE_PATH . '/includes/tools/CalendarMail.class.php' );
require_once( SITE_PATH . '/includes/tools/Position.class.php' );
require_once( SITE_PATH . '/includes/tools/FPDF/FPDF.class.php');


/* Audit
 * Includes the system Audit singleton class.
 * Note that if you want to use it or implement it into a class,
 * only need to use Audit::setAudit()
 * wich will archive an audit info in the system through the DB
 */
require( SITE_PATH . '/includes/Audit.class.php' );
Audit::initSettings();


/**
 * Errors
 * @link http://www.php.net/manual/fr/function.set-error-handler.php set_error_handler
 * @param int $errno niveau d'erreur
 * @param string $errstr message d'erreur
 * @param string $errfile nom du fichier concerné
 * @param int $errline optionnel, numero de la ligne concernée
 * @throws ErrorException
 */
if( SITE_DEBUG )
{
    ini_set('error_prepend_string', "<pre style=\"white-space:pre-wrap;\">\n");
    ini_set('error_append_string', "</pre>\n");

    function exception_error_handler( $errno, $errstr, $errfile, $errline )
    {
        throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
    }
    set_error_handler("exception_error_handler");
}


/* Db
 * Connects to DB with PDO
 */
require SITE_PATH . '/includes/Db.class.php';
Db::connect( $config );


/* Session
 * Starts(or continues) a session using the session name 
 * found in config file and the sessions save path
 * Then, clears the useless variable containing config infos.
 */
session_save_path( SITE_PATH . '/caches/sessions' );
session_name( $config['sessionName'] );
session_start();

unset( $config );


/* Request
 * Includes the Request singleton class.
 * Note that if you want to use it or implement it into a class,
 * you will need to use Request::getInstance()
 * which will return a reference to the only instance of the Request class.
 */
require_once( SITE_PATH . '/includes/Request.class.php' );


/* Extends classes
 * Includes usefull classes extensions which are used by
 * applications to access some common tools and process
 * See the documentation for explicit explanations
 */
require_once( SITE_PATH . '/includes/components/Common.class.php' );
require_once( SITE_PATH . '/includes/components/CommonController.class.php' );
require_once( SITE_PATH . '/includes/components/CommonModel.class.php' );
require_once( SITE_PATH . '/includes/components/Module.class.php' );


/* Lang
 * Set Language and charset in the system
 * Loads the right public/languages/[language].xml file
 */
require_once( SITE_PATH . '/includes/Lang.class.php' );
Lang::initSettings( SITE_LANGUAGES, SITE_CHARSET );


/* URL Bootstrap
 * Catches URL infos.
 * Verifies the request is allowed (application exists) otherwise 404
 * Allowes page=login ou page=home
 * Loads page url info (page, action and router).
 */
require SITE_PATH . '/includes/Bootstrap.class.php';
Bootstrap::url();


/* Adm
 * Set Admin infos ready to be used
 * Main menu and user rights
 * At this point menu and right topics are set
 * also by checking application Router infos
 */ 
require SITE_PATH . '/includes/Adm.class.php';  
Adm::initSettings();



/* Login 
 * Includes the Login singleton class.
 * Checks if a connection is tried and manage the login if so (errors or session)
 * Checks if a logout is made and kill the session if so
 * Checks if there's no connection but a cookie is set (reset). Do the login if so.
 * Checks if a login is to be made through the url (API usage)
 */
require_once( SITE_PATH . '/includes/Login.class.php' );
Login::initSettings();



/* Rights
 * Define rights for the user on this current page
 * by checking the menu session's infos and compare informations 
 * with what's in the database
 */
function autorise_add(){ return Adm::getUserPageRight('w'); }
function autorise_mod(){ return Adm::getUserPageRight('m'); }
function autorise_del(){ return Adm::getUserPageRight('d'); }
function autorise_val(){ return Adm::getUserPageRight('v'); }


/* API
 * Set API call if page=api
 * Catches the URL infos and send them to the applications
 * Return Datas from the applications controller
 * Note : action is becoming page. So URL are api/contacts/...
 * Exception for login. Then action=login 
 */
require SITE_PATH . '/includes/Api.class.php';
Api::apiUrl( Bootstrap::$page, Bootstrap::$action, Bootstrap::$router );


/* Templates
 * Includes the system Templates singleton class (ready to use, doesn't need to be loaded)
 * Note : it is used in the Bootstrap process
 * Contains also AJAX and API requests
 * Will define all of this at the end of the process (init)
 * with Template::page( $urlInfos );
 */
require SITE_PATH . '/includes/Template.class.php';


/* Page Treating
 * Send URL infos to the template rendering process
 * 1. is Ajax request :: router=ajax
 * 2. User is connect or visitor url access attempt not allowed :: page=login AND action=disconnect
 * 3. Ajax error (token not reconized)
 * 4. Normal Loading Page :: user's loguedIn OR page=login
 * 4.1 Print page : action=print
 * 4.2 Standard page OR login. End of the process.
 * 5. Public page (because Adm::isPublic() says so
 * 6. Something's strange... Then it redirects to homepage
 */
Template::page([ 
        'page'   => Bootstrap::$page, 
        'action' => Bootstrap::$action, 
        'router' => Bootstrap::$router 
        ]);


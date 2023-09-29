import os
import psutil

pid = os.getpid()
python_process = psutil.Process(pid)
memoryUse = python_process.memory_info()[0]/2.**30  # memory use in GB...I think
print('memory use:', memoryUse)

# print("Hello from python test.py")

"""
def myFunction():
    print("test function")

myFunction()
"""
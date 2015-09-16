import json
import os

def check_param(arr):
	print arr
	

def codelink_receive(arr):
	rdata=open('jsons/'+arr[1])
	result = json.load(rdata)
	rdata.close()
	return result

def codelink_send(data,arr):
	wdata=open('jsons/'+arr[2],'w')
	wdata.write(data)
	wdata.close()	
	os.remove('jsons/'+arr[1])
	

import json

def codelink_receive(dataname):
	rdata=open('$PWD/jsons/'+ dataname+'-input.json','w')
	result = json.load(rdata)
	print result
	return 'apples' #result
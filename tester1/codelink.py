import sys
import json
import os



cmd = 'python '+'test.py '
os.system(cmd)
var = sys.argv[1]

# $result=shell_exec('python '.'codelink.py'.' '.escapeshellarg(json_encode($data)));

#var=json.loads(sys.argv[1])
#print var

#subprocess.check_call([sys.executable, 'test.py'])
#print "birds1"
#subprocess.check_call([sys.executable, 'test.py', var])
#print "birds2"

def codelink_get():
	return var

 





# var3=json.loads(sys.argv[3])
# cmd = "python "+var
# p = Popen(cmd , shell=True, stdout=PIPE, stderr=PIPE)




# var=var+8



def codelink_receive(dataname):
	rdata=open('$PWD/jsons/'+ dataname+'-input.json','w')
	result = json.load(rdata)
	print result
	return 'apples' #result
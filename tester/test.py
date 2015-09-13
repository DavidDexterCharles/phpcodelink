import sys
#from codelink import codelink_receive


#result = codelink_receive('forminfo')
#===============================================================================
# 
# Accept dataname,timestamp,working directory
#===============================================================================

print sys.argv[0]
print len(sys.argv)
#print result
foutput= open(sys.argv[3]+sys.argv[2]+'-'+sys.argv[1]+'-output.json', 'w')
foutput.write('Apples')
foutput.close()



import sys

from codelink import *# check_param,codelink_receive,codelink_send




check_param(sys.argv)#output the arguments passed in that includes the script being executed,the inputfile that stores the info,and the output file from which php gets the info
codelink_receive(sys.argv)#gets data that was passed from php

#codelink_send('{"name":"david","name2":"warren"}',sys.argv)#sends the results back to php


codelink_send(codelink_receive(sys.argv),sys.argv)
str = "this is\tstring example...Wow!!";
str_1 = "exam";

#print str.find(str_1);
#print str.find(str_1,10);
#print str.find(str_1,40);
#print str.isalpha();
#print str.isdigit();
#print str.islower();
#print str.isspace();

name = ["imran", "khan", "opu"];
add = "-";

#print add.join(name);
#print str.lower();
#print str.swapcase();
#name.reverse();
#print "List : ", name;
#import time;

#ticks = time.localtime(time.time());
#print ticks;
def printinfo(ar, *vartu):
	print "output is : "
	print ar
	for va in vartu:
		print va;

	return;

#printinfo(10);
#printinfo(70,60,50);
#import sopport module
import support

support.print_func("imu")

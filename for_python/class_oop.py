class Employee:
	'Common base class for all employees'

	empCount = 0

	def __init__(self, name, salary):

		self.name = name
		self.salary = salary

		Employee.empCount += 1

	def displayCount(self):
		print "Total Employee %d" % Employee.empCount

	def displayEmployee(self):
		print "Name : ", self.name, "Salary : ", self.salary

		#Instance
emp1 = Employee("imran", 60000)
emp_1 = Employee("sid", 70000)

#Accessing Attributes
emp1.displayEmployee()
emp_1.displayEmployee()
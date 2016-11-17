#!/usr/bin/env/python3

class Employee:
    
    raise_of_amount = 1.04
    def __init__(self, first, last, pay):
        self.first = first
        self.last = last
        self.pay = pay
        self.email = first + '.' + last + '@gmail.com'
    
    def fullname(self):
        return '{}{}'.format(self.first, self.last)
    
    def apply_rise(self):
        self.pay = int(self.pay * self.raise_of_amount)
    

class Developer(Employee):
    raise_of_amount = 1.50

    def __init__(self, first, last, pay, prog_lan):
        Employee.__init__(self, first, last, pay)
        self.prog_lan = prog_lan

    def __repr__(self):
		return "Employee('{}', '{}', {})".format(self.first, self.last, self.pay)
   
    def __str__(self):
    	return "Employee('{}'-'{}')".format(self.email, self.fullname())

class Manager(Employee):

        #employee = None
        #"""docstring for Manager"""
        def __init__(self, first, last, pay, employee = None):
            Employee.__init__(self, first, last, pay)
            if employee is None:
                self.employee = []
            else:
                self.employee = employee

        def add_employee(self, emp):
            if emp not in employee:
                self.employee.append(emp)

        def remove_employee(self, emp):
            if emp in employee:
                self.employee.remove(emp)

        def print_emp(self):
            for emp in self.employee:
                print("-->", emp.fullname())
                

dev_1 = Developer('imran', 'khan', 60000, 'codeigniter')
dev_2 = Developer('opu', 'khan', 20000, 'python')
dev_3 = Manager('Sid', 'khan', 50000,[dev_1])#he is a superviser

#dev_3.add_employee()#add employee
print(dev_3.print_emp())#show employee
print(dev_3.fullname())
#print(help(Developer))

#print(dev_2)
#print(repr(dev_2))
#print(str(dev_2))
#print(dev_3.email)
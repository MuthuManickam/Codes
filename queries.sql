Queries

1. select * from emp;

2. select distinct jobs from employee;

4. select empno,empname from emp where deptno=10 or deptno=20;

5. select empno, empname from emp where desig='Clerk' and deptno=20;

6. select * from emp where ename='Smith';

7. select location from emp where ename='Smith';

11. select ename,empno from emp where designation = 'Manager';

15. select distinct deptname, job from emp;

16. select * from emp where ename='Blake';

17. select * from emp where designation='Clerk';

18. select empno,salary,commission from emp;

19. select distinct deptname from emp;

20. select empno,empname from emp where doj='01-MAY-81';

21. select ename,empno from emp where empno=mgrno;

22. select ename,empno from emp where designation in ('Clerk','Manager');

23. select ename,empno from emp where doj in ('01-MAY-81','17-NOV-81','30-DEC-81');

24. SELECT * FROM emp WHERE hiredate LIKE '%81';

25. select ename,empno from emp where salary between 23000 and 40000;

28. select salary from emp where ename='Smith' and ename='Miller';

34. select ename from employee where ename like 'M%';

35. select ename from employee where ename like '%H';

36. SELECT * FROM emp WHERE hiredate LIKE '%81';

37. select ename, salary from employee where salary like '%00';

38. select empno, ename from emp where doj like '%80';

41. SELECT * FROM emp WHERE ename LIKE 'S%';

42. SELECT * FROM emp WHERE ename LIKE '%A%';

43. SELECT ename FROM emp WHERE ename LIKE '__L%';

47. select distinct deptname from emp;

48. select ename "Employee", salary "Monthly Salary" from emp where salary > 1500 and deptno=10 or deptno=30;

60. select ename, empno from emp where doj like '%DEC%';

66. selecct ename, empno from emp order by salary;

68. select distinct designation from emp order by designation desc;

73. select ename, empno from emp where designation='Clerk' or designation='Analyst' order by designation desc;

74. select ename, empno from emp where doj in ('1-MAY-81','3-DEC-81','17-DEC-81','19-JAN-80') order by doj;

75. SELECT * FROM emp WHERE doj LIKE '%81';

76. select * from emp where doj like '%-AUG-80';

78. select ename from emp where ename like 'S%' and length(ename)=5);

79. select * from emp where length(ename)=4 and ename like '__r%');

80. select ename from emp where ename like 'S%H' and length(ename)=5);

81. select * from emp where doj like '%JAN%';

83. select ename, empno from emp where salary like '%0' and length(salary)=4;

85. SELECT * FROM emp WHERE doj LIKE '%80';

89. select ename, empno from emp where deptno in (30,10) and doj like '%81';

90. select max(salary) from emp;

91. select empno, sum(salary) from emp where designation='Manager' group by empno;

92. select jobtitle, sum(salary)*12 from emp where to_char(e.doj,'YY')=81 group by jobtitle;

93. select sum(salary) from emp where grade;

94. select avg(salary) from emp where design='Clerk';

95. select empname, empno to_char(doj, 'Month DD,YYYY') from emp;

99. select count(*) from emp where designation='Manager';

101. select * from emp order by salary;

102. select empno,ename from emp order by dept 

103. select empno,ename,salary,deptno from emp where deptno=10 order by salary;

104. select * from emp where salary < 3500;

106. select ename, salary*12 from emp where salary < 25000 order by salary;

109. select * from emp where extract(month from age(currentdate,doj)) > 10;

111. select ename, empno from emp where doj like '%JAN%';

114. select ename, empno from emp where doj like '%JAN%' and salary between 1500 and 4000;

115. select distinct designation from emp where deptno in (20,30) 
order by deptno;

122. select min(salary), max(salary) from emp;

123. select min(salary), max(salary), deptno from emp group by deptno;

124. select * from emp where salary < 1000 and desig = 'Clerk';

127. select grade, count(empno), max(salary) from emp group by grade;

129. select empname, deptno from emp where salary =(select max(salary) from emp group by deptno);


206. (i) Create table EMPLOYEE 
	(EmployeeID number(6) primary key,
	  EmployeeName varchar2(10),
	  Street varchar2(15),
	  City varchar2(10));
	
           (ii) Create table COMPANY 
	(CompanyID number(6) primary key,
	 CompanyName varchar2(10),
	 City varchar2(10));

            (iii) Create table WORKS 
	 (EmployeeID number(6) foreign key references EMPLOYEE(EmployeeID),
	 CompanyID number(6) foreign key references COMPANY(CompanyID),
	 Salary number(6));
	
             (iv) Create table MANAGES 
	 (EmployeeID number(6) foreign key references EMPLOYEE(EmployeeID),
	  ManagerID number(6) primary key));

desc EMPLOYEE;
desc COMPANY;
desc WORKS;
desc MANAGES;









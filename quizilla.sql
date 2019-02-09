CREATE DATABASE quizilla;
USE quizilla;

CREATE TABLE IF NOT EXISTS users (
                                     userId int(100) NOT NULL,
                                     userName varchar(55) NOT NULL,
                                     password varchar(55) NOT NULL,
                                     email varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=latin1;

ALTER TABLE users ADD PRIMARY KEY (userId);
ALTER TABLE users ADD UNIQUE KEY (email);

ALTER TABLE users MODIFY userId int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=0;

CREATE TABLE IF NOT EXISTS courses(
                                    courseId int(10) NOT NULL,
                                     courseName varchar(55) NOT NULL
);
ALTER TABLE courses ADD PRIMARY KEY (courseId);
ALTER TABLE courses ADD UNIQUE KEY (courseName);

ALTER TABLE courses MODIFY courseId int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=0;

INSERT INTO courses (courseId,courseName) VALUES
(1,'LT'),
(2,'OOP'),
(3,'ITC');

CREATE TABLE IF NOT EXISTS questions(
                                     quesId int(10) NOT NULL,
                                     question varchar(250) NOT NULL,
                                     opt1 varchar(55) NOT NULL,
                                     opt2 varchar(55) NOT NULL,
                                     opt3 varchar(55) NOT NULL,
                                     opt4 varchar(55) NOT NULL,
                                     correctAns varchar(55) NOT NULL,
                                     explaination varchar(250),
                                     courseId int(10) NOT NULL
);
ALTER TABLE questions ADD PRIMARY KEY (quesId);
ALTER TABLE questions ADD UNIQUE KEY (question);
ALTER TABLE questions ADD FOREIGN KEY (courseId) REFERENCES courses(courseId);

ALTER TABLE questions MODIFY quesId int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=0;

INSERT INTO questions (quesId,question,opt1,opt2,opt3,opt4,correctAns,explaination,courseId) VALUES
(1,'If P means "add to", V means "multiply by", M means "subtract from" and L means "divide by" then 30 L 2 P 3 V 6 M 5 = ?','18','28','31','103','28','Using Correct Symbols, We have:
Given expression = 30 / 2 + 3 x 6 - 5 = 15 + 18 - 5',1),
(2,'Amit is cleverer than Rohan. Sudeep is cleverer than Amit, but not more than Harshit. Garima is the cleverest of them all. If they are arranged in ascending order of cleverness, then who among the following will hold the middle position?','Amit','Rohan','Sudeep','Harshit','Sudeep',' Cleverness in ascending order: Rohan < Amit < Sudeep < Harshit < Garima',1),
(3,'A man starts walking towards Northeast diagonally from the left corner of a square plot and turns right after reaching the center of the plot. After some distance he again turns right and continues walking. Which direction is he facing now?','East','West','South','North','South',NULL,1),
(4,'''Divorce'' is related to ''Marriage'' in the same way as ''False'' is related to:','Fiction','Lie','1','Story','1','Marriage is opposite to divorce, Similarly True is opposite to False',1),
(5,'In each of the following questions, various terms of an alphabet series are given with one or more terms missing as shown by (?). Choose the missing terms out of the given alternatives: &nbsp B, D, F, I, L, P, ? ','R','S','T','U','T','The letters move 2, 2, 3, 3, 4, 4, ... steps forward.',1),
(6,'Which of the following best defines a class?','Parent of an object','Instance of an object','Blueprint of an object','Scope of an object','Instance of an object','A class is Blueprint of an object which describes/ shows all the functions and data that are provided by an object of a specific class. It can’t be called as parent or instance of an object. Class in general describes all the properties of an object.',2),
(7,'Which among the following best describes polymorphism?','It is the ability for a message/data to be processed in more than one form','It is the ability for a message/data to be processed in only 1 form','It is the ability for many messages/data to be processed in one way','It is the ability for undefined message/data to be processed in at least one way.','It is the ability for a message/data to be processed in more than one form','It is actually the ability for a message / data to be processed in more than one form. The word polymorphism indicates many-forms. So if a single entity takes more than one form, it is known as polymorphism',2),
(8,'Which class/set of classes can illustrate polymorphism in the following code: &nbsp abstract class student { public : int marks; calc_grade(); } class topper:public student { public : calc_grade() { return 10; } }; class average:public student { public : calc_grade() { return 20; } }; class failed{ int marks; };','Only class student can show polymorphism','Only class student and topper together can show polymorphism','All class student, topper and average together can show polymorphism','Class failed should also inherit class student for this code to work for polymorphism','All class student, topper and average together can show polymorphism','Since Student class is abstract class and class topper and average are inheriting student, class topper and average must define the function named calc_grade(); in abstract class. Since both the definition are different in those classes, calc_grade() will work in different way for same input from different objects. Hence it shows polymorphism.',2),
(9,'Which among the following best describes constructor overloading?',' Defining one constructor in each class of a program','Defining more than one constructor in single class','Defining more than one constructor in single class with different signature','Defining destructor with each constructor','Defining more than one constructor in single class with different signature','If more than one constructors are defined in a class with same signature, then that results in error. The signatures must be different. So that the constructors can be differentiated.',2),
(10,'Can constructors be overloaded in derived class?','Yes, always','Yes, if derived class has no constructor','No, programmer can’t do it','No, never','No, never','The constructor must be having the same name as that of a class. Hence a constructor of one class can’t even be defined in another class. Since the constructors can’t be defined in derived class, it can’t be overloaded too, in derived class.',2),
(11,'If you needed to execute some code repeatedly based on a certain condition, which of the following would you use?','Loop','Variable','Conditional','Compiler','Loop',NULL,3),
(12,'What is the difference between a variable and a constant?','The value of a constant doesn''t change, the value of a variable can change all throughout a program','Variables can be declared only in software languages',' No difference','Constants can be declared only in Java','The value of a constant doesn''t change, the value of a variable can change all throughout a program',NULL,3),
(13,' In C-style languages, an asterisk (*) after a variable denotes a:   ','Float','Function','Pointer','Reference','Pointer','Declaring a variable with an asterisk after it in C sets it as a pointer',3),
(14,'How many bytes does a char use?','1','2','4','8','1',NULL,3),
(15,'Ask user for a number, ask user for another number, multiply the two numbers, print result..What do you call this set of instructions?','An algorithm','A compiler','A class','PHP','An algorithm','An algorithm is a set of steps for carrying out a specific task. Algorithms are used extensively in computer programming to arrive at a solution for a problem. A real world example of an algorithm would be a recipe. The instructions of a typical recipe (add ingredients, mix, stir, etc.) are an algorithm.',3);

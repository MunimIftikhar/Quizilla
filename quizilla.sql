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
(5,'In each of the following questions, various terms of an alphabet series are given with one or more terms missing . Choose the missing terms out of the given alternatives: &nbsp B, D, F, I, L, P, ? ','R','S','T','U','T','The letters move 2, 2, 3, 3, 4, 4, ... steps forward.',1),
(6,'Which of the following best defines a class?','Parent of an object','Instance of an object','Blueprint of an object','Scope of an object','Instance of an object','A class is Blueprint of an object which describes/ shows all the functions and data that are provided
 by an object of a specific class. It can’t be called as parent or instance of an object. Class in general describes all the properties of an object.',2),
(7,'Which among the following best describes polymorphism?','It is the ability for a message/data to be processed in more than one form','It is the ability for a message/data to be processed in only 1 form','It is the ability for many messages/data to be processed in one way','It is the ability for undefined message/data to be processed in at least one way.','It is the ability for a message/data to be processed in more than one form','It is actually the ability for a message / data to be processed in more than one form.
The word polymorphism indicates many-forms. So if a single entity takes more than one form, it is known as polymorphism',2),
(8,'Which class/set of classes can illustrate polymorphism in the following code: &nbsp abstract class student { public : int marks; calc_grade(); } class topper:public student { public : calc_grade() { return 10; } }; class average:public student { public : calc_grade() { return 20; } }; class failed{ int marks; };','Only class student can show polymorphism','Only class student and topper together can show polymorphism','All class student, topper and average together can show polymorphism','Class failed should also inherit class student for this code to work for polymorphism','All class student, topper and average together can show polymorphism','Since Student class is abstract class and class topper and average are inheriting student, class topper and average must define the function named calc_grade(); in abstract class. Since both the definition are different in those classes, calc_grade()
will work in different way for same input from different objects. Hence it shows polymorphism.',2),
(9,'Which among the following best describes constructor overloading?',' Defining one constructor in each class of a program','Defining more than one constructor in single class','Defining more than one constructor in single class with different signature','Defining destructor with each constructor','Defining more than one constructor in single class with different signature','If more than one constructors are defined in a class with same signature, then that results in error.
The signatures must be different. So that the constructors can be differentiated.',2),
(10,'Can constructors be overloaded in derived class?','Yes, always','Yes, if derived class has no constructor','No, programmer can’t do it','No, never','No, never','The constructor must be having the same name as that of a class. Hence a constructor of one class can’t even be defined in another class.
Since the constructors can’t be defined in derived class, it can’t be overloaded too, in derived class.',2),
(11,'If you needed to execute some code repeatedly based on a certain condition, which of the following would you use?','Loop','Variable','Conditional','Compiler','Loop',NULL,3),
(12,'What is the difference between a variable and a constant?','The value of a constant doesn''t change, the value of a variable can change all throughout a program','Variables can be declared only in software languages',' No difference','Constants can be declared only in Java','The value of a constant doesn''t change, the value of a variable can change all throughout a program',NULL,3),
(13,' In C-style languages, an asterisk (*) after a variable denotes a:   ','Float','Function','Pointer','Reference','Pointer','Declaring a variable with an asterisk after it in C sets it as a pointer',3),
(14,'How many bytes does a char use?','1','2','4','8','1',NULL,3),
(15,'Ask user for a number, ask user for another number, multiply the two numbers, print result..What do you call this set of instructions?','An algorithm','A compiler','A class','PHP','An algorithm','An algorithm is a set of steps for carrying out a specific task. Algorithms are used extensively in computer programming to arrive at a solution for a problem. A real world example of an algorithm would be a recipe. The instructions of a typical recipe (add ingredients, mix, stir, etc.) are an algorithm.',3),
(16,'Before source code can be compiled, it has to be _______________','parsed','capitalized','saved in a separate file','viewed in a command prompt','parsed','To "parse" means to break up into smaller parts. Before source code can be converted into meaningful data for the computer (compiled), it has to be parsed. When source code is compiled, it is turned into object code.',3),
(17,'Which of the following is NOT a software language?','C++','HTML','Visual Basic','C',' HTML','HTML is is a web language. C, C++, and Visual Basic are all software development languages.',3),
(18,'The body of the while loop is continuously executed until the specified condition is _______.','Completed ','True ','False','None of the above','True',NULL,3),
(19,'What is the output of the following code snippet?

#include<stdio.h>

main()
{
   short unsigned int i = 0;

   printf("%u\n", i--);
}','0','Compile error','65535','32767','0','0, with post decrement operator value of the variable will be considered as the expression’s value and later gets decremented.',3),
(20,'What is the output of the following program?

#include<stdio.h>

main()
{
   char *s = "Hello";

   while(*s!=NULL)
   printf("%c", *s++);
}','Hello','Helloellolloloo','ello','Compile error','Hello','NULL is equivalent to ‘\0’ in value. Statement *s++ prints the character first and increments the address later.',3),
(21,'How to round-off a value “5.77” to 6.0?','ceil(5.77)','round-off(5.77)','round-up(5.77)','floor(5.77)','ceil(5.77)','ceil( ) function in C returns nearest integer value which is greater than or equal to the argument passed to the function. #include <math.h>
#include <stdio.h>

 int main()
{
   float x=5.77;
   printf("ceil of  %f is  %f\n", x, ceil(x));
   return 0;
}',3),
(22,'Which of the following is a logical OR operator?','&','&&','||','None of the above','||','&& = Called Logical AND operator. If both the operands are non-zero, then condition becomes true.

|| = Called Logical OR Operator. If any of the two operands is non-zero, then condition becomes true.

! = Called Logical NOT Operator. Use to reverses the logical state of its operand. If a condition is true then

Logical NOT operator will make false.',3),
(23,'What is the output of the following program?

#include<stdio.h>

main()
{
   int r, x = 2;
   float y = 5;

   r = y%x;
   printf("%d", r);
}','1','0','2','Compile Error','Compile error','Compile Error, It is invalid that either of the operands for the modulus operator (%) is a real number.',3),
(24,'How many times the given below program will print "WAD"?

#include<stdio.h>

int main ()
{
   printf("WAD");
   main();
   return 0;

}','Unlimited times','0 times','100 times','Till stack run over','Till stack run over','A stack over flow comes when over loaded memory is used by the call stack. Here, main()function  is called repeatedly and its return address stores in the stack. When stack memory get filled, it displays the error “stack overflow”.

#include<stdio.h>

int main ()
{
   printf("WAD");
   main();
   return 0;

}',3),
(25,'In the given below code, what will be the value of a variable x?

#include<stdio.h>

int main()
{
    int y = 100;
    const int x = y;

    printf("%d\n", x);
    return 0;
}','100','0','Print x','Return Error','100','Although, integer y = 100; and constant integer x is equal to y. here in the given above program we have to print the x value, so that it will be 100.
',3),
(26,'What is the output of the following program?

#include<iostream>

using namespace std;
class Base {
public:
   void f() {
      cout<<"Base\n";
   }
};
class Derived:public Base {
public:
   void f() {
      cout<<"Derived\n";
   };
};
main() {
   Derived obj;
   obj.Base::f();
}','Base','Derived','Compile Error','None of the above.','Base','Base object cannot refer to Derived members.#include<iostream>

using namespace std;
class Base {
public:
   void f() {
      cout<<"Base\n";
  }
};
class Derived:public Base {
public:
   void f() {
      cout<<"Derived\n";
   };
};
main() {
   Derived obj;
   obj.Base::f();
}
',3),
(27,'What is the output of the following program?

#include<iostream>

using namespace std;
main() {
   union abc {
		int x;
		char ch;
	} var;

   var.ch = 'A';
   cout<<var.x;
}','A','Garbage Value','65','97','Garbage Value','65, as the union variables share common memory for all its elements, x gets ‘A’ whose ASCII value is 65 and is printed.

#include<iostream>

using namespace std;
main() {
   union abc {
		int x;
		char ch;
	} var;

   var.ch = 'A';
   cout<<var.x;
}

',3),
(28,'In each of the following questions, various terms of an alphabet series are given with one or more terms missing as shown by (?). Choose the missing terms out of the given alternatives.
 BAZ, DCY, FEX, ? ','FXW','EFX','FEY','GHW',' GHW','
The first letter moves two steps forward. The second letter moves 2 steps forward. The third letter moves one step backward.',1),
(29,'If in a certain language KINDLE is coded as ELDNIK, how is EXOTIC coded in that code?
','EOXITC','EXOTLC','CITOXE','COXITE','CITOXE',NULL,1),
(30,'in a certain code, TEACHER is written as VGCEJGT, how would DULLARD be written in the same code?','FWNNCSF','FWNNCTF','FWMNCTF','FWNNBTE','FWNNCTF',NULL,1),
(31,'A told B that C is his fathers nephew. D is As cousin but not the brother of C. What relationship is there between D and C ? ','Father','Sisters','Aunt','Mother','Sisters','A has two cousins C and D.
Since C is male, D must be female.
And, both are the nephew and niece of As father.',1),
(32,'In  a family, there are six members A, B, C, D, E and F. A and B are a married couple, A being the male member. D is the only son of C, who is the brother of A. E is the sister of D. B is the daughter-in-law of F, whose huasband has died. How is E related to','Nephew','Daughter','Sister','Son-in-Law',' Daughter','A is a male and married to B.
So, A is the husband and B is the wife.
C is the brother of A. D is the son of C.
E, who is the sister of D will be the daughter of C.
B is the daughter-in-law of F whose husband has died means F is the mother of A.
Hence, E is the daughter of C',1),
(33,'Based on the following statements, which is the correct conclusion drawn.
Only gentlemen can become members of the club. Many of the members of the club are officers. Some of the officers have been invited for dinner. ','All the members of the club have been invited for dinner','Some of the officers are not gentlemen','All gentlemen are members of the club','Only gentlemen have been invited for dinner','All gentlemen are members of the club',NULL,1),
(34,'In a family there are husband wife, two sons and two daughters. All the ladies were invited to a dinner. Both sons went out to play. Husband did not return from office. Who was at home?
','Only wife was at home','All ladies were at home','Only sons were at home','No body was at home','No body was at home',NULL,1),
(35,'Foresight : Anticipation : : Insomnia : ? ','Treatment','Disease','Sleeplessness','Unrest','Sleeplessness',NULL,1),
(36,'If programmer have defined parameterized constructor only, then __________________','Default constructor will not be created by the compiler implicitly','Default constructor will be created by the compiler implicitly','Default constructor will not be created but called at runtime','Compile time error','Default constructor will not be created by the compiler implicitly','When the programmer doesn’t specify any default constructor and only defines some parameterized constructor. The compiler doesn’t provide any default constructor implicitly.
 This is because it is assumed that the programmer will create the objects only with constructors.',2),
(37,'Which among the following best describes encapsulation?','It is a way of combining various data members into a single unit',
'It is a way of combining various member functions into a single unit','It is a way of combining various data members and member functions into a single unit which can operate on any data'
,'It is a way of combining various data members and member functions that operate on those data members into a single unit','It is a way of combining various data members and member functions that operate on those data members into a single unit',
't is a way of combining both data members and member functions, which operate on those data members, into a single unit. We call it a class in OOP generally. This feature have helped us modify the structures used in C language to be upgraded into class in C++ and other languages.
',2),
(38,'Which feature can be implemented using encapsulation?
','Inheritance','Abstraction','Polymorphism','Overloading','Abstraction','Data abstraction can be achieved by using encapsulation. We can hide theq9 operation and structure of actual
program from the user and can show only required information by the user',2),
(39,'Which among the following would destroy the encapsulation mechanism if it was allowed in programming?','Using access declaration for private members of base class','Using access declaration for public members of base class',
'Using access declaration for local variable of main() function','Using access declaration for global variables','Using access declaration for private members of base class','If using access declaration for private members of base class was allowed in programming, it would have destroyed whole concept of encapsulation. As if it was possible, any class which gets inherited privately,
 would have been able to inherit the private members of base class, and hence could access each and every member of base class.
',2),
(40,'Hiding the implementation complexity can:','Make the programming easy','Make the programming complex',
'Provide more number of features','Provide better features','Make the programming easy','It can make the programming easy. The programming
need not know how the inbuilt functions are working but can use those complex functions directly in the program. It doesn’t provide more number of features or better features.',2),
(41,'Object is ________ abstraction','Object','Logical','Real','Hypothetical','Real','Object is real abstraction because it actually contains those features of class. It is the implementation of overview given by class. Hence the class is logical abstraction and its object is real',2),
(42,'Which feature of OOP reduces the use of nested classes?','Encapsulation','Inheritance','Binding','Abstraction','Inheritance','Using inheritance we can have the security of the class being inherited.
 The subclass can access the members of parent class. And have more feature than a nested class being used',2),
(43,'Which keyword among the following can be used to declare an array of objects in java?','new','create','allocate','arr','new','The keyword new can be used to declare an array of objects in java. The syntax must be specified with an object pointer which is assigned with a memory space containing the required number of object space. Even initialization can be done directly.
',2),
(44,'Which function is called whenever an object goes out of scope?','Destructor function','Constructor function','Delete function','Free function','Destructor function','he destructor function of the class is called whenever an object goes out of scope. This is because the destructor set all the resources, acquired by the object, free. This is an implicit work of compiler.',2),
(45,'Diamond problem includes ____________________ hybrid inheritance','Hierarchical and Multiple','Hierarchical and Hierarchical','Multiple and Multilevel','Single, Hierarchical and Multiple','Hierarchical and Multiple','The diamond problem arises when more than one classes are derived from one class and then those classes are used to derive single class. Resulting in ambiguity of same functions from each class.',2),
(46,'The static data member __________________________','Can be accessed directly','Can be accessed with any public class name','Can be accessed with dot operator','Can be accessed using class name if not using static member function','Can be accessed using class name if not using static member function','The static data members can be accessed using the class name also. If the member functions is not used or is not to be used then we can call the static data members directly by using its corresponding class name',2);
# php-learning-journey
My journey of learning PHP from scratch
projects, notes, and exercises and many more.


 Day 1: Setup + Hello World

 Installed XAMPP and VS Code
 Created my first PHP file (`hello.php`)😋
 Ran PHP on localhost using Apache
 Printed my first output using `echo`

> Output: `Hello, PHP World!

Day 2: Variables and Data Types

- Learned how to declare and use variables
- Explored data types: string, integer, float, boolean
- Practiced with arithmetic and assignment operators
- Created a basic calculator

Day 3: Conditions and Loops
- Practiced using if, else, elseif, and switch statements
- Learned loops: for, while, and foreach
- Made a simple login simulation using conditionals

Day 4: Arrays and Functions
- Learned Indexed, Associative, and Multidimensional arrays
- Used array functions like count(), array_push(), and sort()
- Created custom functions with parameters and return values

Day 5: HTML Form (GET)
- Created a simple feedback form
- Learned how to send data using GET method
- Practiced accessing values using $_GET superglobal

IN Browser I see 
Feedback Form 

Name:     [           ]

Message:  [ Your message here            ]

[Submit]

I entered...
Name: Prathamesh

Message: This is my first PHP form

> Output: Form Submitted
Hello, Prathamesh!
Your message: This is my first PHP form

Day 6: POST Form + Validation
- Created a login form using POST method
- Learned how to validate empty fields using `empty()`
- Used `$_POST` safely instead of GET

Enter:
Username: Prathamesh
Password: 12345

Click Submit → goes to form_post_result.php

Output:✅ Login Successful
Welcome, Prathamesh

Day 7: Input Sanitization with trim(), htmlspecialchars() & filter_var()
Today is about securing your form data and cleaning it up before use
Day 7: Input Sanitization
- Used `trim()`, `htmlspecialchars()`, and `filter_var()` to clean form input
- Prevented XSS by escaping HTML
- Validated email using `FILTER_VALIDATE_EMAIL`
> Output:
✅ Message Received
Thank you, Prathamesh!
We will reply to hello@bad.com
Your Message: Hello &lt;b&gt;world&lt;/b&gt;

Day 8: Feedback Collector

reated a simple form with Name, Email, and Message
- Sanitized and validated user input
- Displayed clean summary on submit
> Output:Shown After Submission:
✅ Thank You for Your Feedback!

Name: Prathamesh Bhagat  
Email: prathamesh@example.com  
Message:  
This PHP course is amazing! 🔥🔥

Day 9: Toady I'll learn

Stored user messages in a `.txt` file
- Learned `fopen()`, `fwrite()`, `fclose()` functions

How to write to a .txt file using PHP
How to append data without overwriting previous entries
Using fopen(), fwrite(), and fclose()
Basic error handling with files

feedbacks.txt(This is new File where)
Each new submission will be added below the previous one.

Day 10 : Read Data from Text File & Display on Webpage
Read data from `feedbacks.txt`
- Used `file_get_contents()` and `explode()` to show all entries
- Displayed feedback using custom CSS blocks
output > 📬 Submitted Feedbacks

[ ] Name: Prathamesh Bhagat
    Email: pb@example.com
    Message: Loving this PHP project!
    
Day 11 :
What is an Array in PHP?
Indexed Arrays (Numerical keys)
Associative Arrays (Named keys)
foreach and for loops for arrays
Array functions like count(), array_push(), etc.

output1; 
A bullet list of fruits.
Total count.
output2; 
Key-value list of a student's info.

*Project Day*

 🎓 Student Management System (SMS) – PHP & MySQL

A simple, clean and functional Student Management System built using **PHP** and **MySQL**, designed for learning CRUD operations, form handling, and database integration.



📌 Features

  Add New Student
  Edit Student Details
  Delete Student
  List All Students
  Search Students by Name or Class
  MySQL Database Integration
  Simple UI using Bootstrap (optional)


Tech Stack

| Tool         | Purpose                |
|--------------|------------------------|
| PHP          | Backend Logic          |
| MySQL        | Database               |
| HTML/CSS     | Frontend UI            |

Day 12
Creating a Multidimensional Array
//
$students = [
    ["name" => "Riya", "marks" => 85],
    ["name" => "Aman", "marks" => 78],
    ["name" => "Sneha", "marks" => 92]
];

 Accessing Values
//
echo $students[0]["name"];    // Output: Riya
echo $students[2]["marks"];   // Output: 92




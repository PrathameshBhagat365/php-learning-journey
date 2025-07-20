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






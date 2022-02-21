<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C language</title>
    <style>
        h1 {
            text-align: center;
            color: #c1ff02;
        }

        body {

            background-color: black;
            color: white;

        }

        ul li {
            list-style-type: none;
            float: right;

        }

        ul li button {
            border-radius: 15px;
            font-size: 19px;
            width: 82px;
            height: 33px;
        }

        ul li button:hover {
            cursor: pointer;
            background-color: brown;
            color: white;
        }
    </style>
</head>

<body>
    <ul>
        <a href="sbacademy.php"><li><button>Home</button></li></a>
    </ul>
    <h1>
        C Language
    </h1>
    <hr>
    <h3 class="heading3">Introduction</h3>
    <p class="firstpara">C is a procedural programming language. It was initially developed by Dennis Ritchie in the<br>
        year 1972. It was mainly developed as a system programming language to write an operating system. The main<br>
        features of the C language include low-level memory access, a simple set of keywords, and a clean style,
        these<br>
        features make C language suitable for system programmings like an operating system or compiler development.<br>
        Many later languages have borrowed syntax/features directly or indirectly from the C language. Like syntax
        of<br>
        Java, PHP, JavaScript, and many other languages are mainly based on the C language. C++ is nearly a superset
        of<br>
        C language (Few programs may compile in C, but not in C++). </p>
    <h3 class="heading3">Topics</h3>
    <ol>
        <li class="topic">Basics</li>
        <li class="topic">Functions</li>
        <li class="topic">Variable</li>
        <li class="topic">Data Types</li>
        <li class="topic">Pointers</li>
        <li class="topic">Enum, Struct and Union</li>
        <li class="topic">Input/Output</li>
        <li class="topic">Operators</li>
        <li class="topic">Arrays & Strings</li>
        <li class="topic">Control Statements</li>
        <li class="topic">C Language Interview Questions</li>
    </ol>

    <!-- This is start the topic sections -->
    <h2>Lets Start Here!</h2>
    <h4 class="heading4">Basics</h4>
    <p class="secondpara">
        The idea of this article is to introduce C standard. <br>

        What to do when a C program produces different results in two different compilers? <br>
        For example, consider the following simple C program. <br>


        void main() { }<br><br>

        Consider the following program as another example. It produces different results in different compilers. <br>


        #include<stdio.h><br>
            int main()<br>
            {<br>
            int i = 1;<br>
            printf("%d %d %d\n", ++i, i++, i);<br>
            return 0;<br>
            }<br>
    </p>
    <h4 class="heading4">Functions</h4>
    <p> A function is a set of statements that take inputs, do some specific computation and produces output.<br>

        The idea is to put some commonly or repeatedly done task together and make a function so that instead of
        writing<br>
        the same code again and again for different inputs, we can call the function.<br>

        The general form of a function is:<br>

        return_type function_name([ arg1_type arg1_name, ... ]) { code }</p>
    </div>
</body>

</html>
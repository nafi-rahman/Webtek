let x,y, option; 

console.log("enter number 1: ");
x = Number (prompt ());

console.log("enter number 2: ");
y = Number (prompt ());

console.log("Enter 1 to add, 2 to subtract, 3 to multiply, 4 to divide");
option = Number (prompt ());

if (option == "1"){console.log(x+y);}

else if (option == "2"){console.log(x-y);}

else if (option == "3"){console.log(x*y);}

else if (option == "4"){console.log(x/y);}


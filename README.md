# HappyPuppyInc
- HappyPuppyInc is a pet adoption website where users can surrender or adopt an animal, donate to the company
  and find data statistics applicable to our fake company.

- Authors: Brandon Burgess and Jack Zeng
- A concise statement describing how and where you implemented each of the Project Requirements, above. 
  Please number each requirement. If you were unable to implement a requirement, state so clearly in the readme.
1. Separates all database/business logic using the MVC pattern.
    
    MVC pattern has been followed. Classes, validation, views, etc. are seperated by directory.

2. Routes all URLs and leverages a templating language using the Fat-Free framework.

    We started by routing all pages through index.php but eventually moved all routing to the controller class
    All routing goes through functions that are called in index.php

3. Has a clearly defined database layer using PDO and prepared statements.

    We have a PDO file in our home directory on cPanel, as well as prepared SQL statements.
    
4. Data can be added and viewed.

    When a user submits the surrender animal form, that animal is then added to the database and can be viewed 
    as an animal that is available for adoption. This can be seen on the "See Our Animals" page.

5. Has a history of commits from both team members to a Git repository. Commits are clearly commented.

    We have approximately 90 commits between the two of us. This can be viewed on our Github repo:
    https://github.com/bkburgess1990/HappyPuppyInc

6. Uses OOP, and utilizes multiple classes, including at least one inheritance relationship.

    We have implemented a Cat and Dog classes that extend the Pet class. We also have a customer class that
    tracks who has submitted applications for adoption.

7. Contains full Docblocks for all PHP files and follows PEAR standards.

    Documentation has been implemented and PEAR standards have been followed.

8. Has full validation on the server side through PHP.

    Validation has been implemented for all forms or input fields.

9. All code is clean, clear, and well-commented. DRY (Don't Repeat Yourself) is practiced.

    Code is clear and easily readable, comments are added where necessary.

10. Your submission shows adequate effort for a final project in a full-stack web development course.

    We believe this website displays our bests efforts and we are proud of what we created. 
    The site is stylistically minimalist but gets the point across. Users were able to use our website
    with no confusion.

- Your most current UML class diagram
<<<<<<< HEAD

=======
![image](https://user-images.githubusercontent.com/116101864/227308457-758f286b-4de3-4856-87a6-c9a0ba3b84c5.png)
![image](https://user-images.githubusercontent.com/116101864/227308924-979881a2-0bc4-4234-a888-c7f48b5ee334.png)
>>>>>>> 34c08dc6722cf7fc3435ff19526bdbdedcbc86ca

- ER Database Diagram
- ![image](https://user-images.githubusercontent.com/116101864/227314190-294f36ea-a299-459e-9a44-93194f89864a.png)




- Your admin login username and password, if applicable

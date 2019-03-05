# Application Supporting ACID or BASE Integrity, and MVC Architecture

# Status: accepted

# Context: 

An explanation of application integrity in regards to either:

1. ACID
2. BASE
3. If we need these guarantees
4. Why the integrity is important for this application

An explanation of MVC with includes (model, view and controller)

5. How MVC architecture works
6. How the current application follows this pattern



# Decision:

The MySQL database that I have used in this application supports an ACID integrity. By this
I first mean that the application is atomic. Everything needs to succeed in a transaction in the database
or the entire transaction does not work. It's also consistent. The database does not allow a transaction within
it to leave the database in an inconsistent state. This is important to to reduce errors within the database.
Next, the application is isolated, meaning that my transactions are separated from each-other and cannot interfere
with each-other. Finally, the application is durable, if the server restarts or any related reasons, a completed transaction
will persist through this. 

The Model View Controller architectural pattern consists of the model which is the lowest level of the pattern,
and it's responsible for maintaining data. The view which displays all of a portion of the data to the user. 
And finally the controller, which is essentially software code that controls the interaction of the model and the view.
The Guitar Shop application does support the MVC architecture. 

The model would be the MySQL database which in my application manages the data within the application, it will respond
from a request from my view and the controller. The view is created by my PHP files which lists the data and allows for
a full set of CRUD operations within the database. The controller is also created with the PHP files, which accepts inputs
and converts it to the model or view. For example, if you create a new product in the controller it manipulate this data in the model
and change the data, then the model will update the view of the product, resulting in the user seeing the new product. 


# Consequences: 

The application does need these guarantees within integrity. Some consequences are
that this works with my small database of guitars. However, if I was to increase my store
and start running an international online store, the availability and performance with my
current application would be incompatible. a better option would be using cached data
to increase the efficiency of the database and allow it to function better.

The MVC architectural pattern allows the user to alter the database with a control and change the model
of the database resulting in them viewing the new data in real time. This increases the effectiveness
of the database in an actual business environment and lets the company change their database easily.
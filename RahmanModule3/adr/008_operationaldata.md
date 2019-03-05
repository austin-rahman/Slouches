# Explanation of Operational Data

# Status: accepted

# Context: 

A  simple explanation of the Operational Data used in this app including:

1. MySQL (ex)
2. Historical
3. Transactional

# Decision:

The Operational data in my application is revolved around a database that is working with a Guitar shop. In my understanding
of operational data in this context it's about the content of what technology components are operating and being used in the
application. An example of this would be my use of MySQL to build the database. It's efficient and easy to use, allowing me to connect
to an Apache webserver very easily is also a large perk. It's important to understand the capacity utilization and determine what
scalability your application could accomplish. As this app is very simple we wouldn't be able to scale very largely just using what
I've produced today. If i continued adding onto the app we would include a bunch of transaction data for the shop. This data would move
and change in response to purchases at the shop. The user would be able to put credit cards and other payment methods into the application in
which would be an example of this. My application does not do this. Another form of operational data that this application could use
would be historic. An example of this relating to the last would be remembering credit card information for more purchases later on, or 
keeping users cart history if they leave the webpage. These are the main components of my application that would be used in reference
to operational data. 


# Consequences: 

With the historic portion of the operational data it would allow the application to flow better. If a user leaves a website after
placing something in there cart and it's not there when they return they may become be less inclined to buy it when they come
back. However if we remember their cart history and the card history they may be more likely to make a purchase on the website.
Amazon does a great job of this with their '1-click checkout' in which you can literally order something with a single click. 
Transactional data is what makes the application work. Without this we are just a database of guitars. For this application to
actually be used as a resource for a business they would need that transactional capability. With these things we could eventually
gain insight into what kind of scalability we needed and flex our business and application plan according to this. In my understanding
this all correlates to operational data and allows a business to run smoothly and more efficiently. 

# Choice of Tools used for Business Logical Layer

# Status: accepted

# Context: 

An example of business logic tools used used for 459 module 6 assignment and explanation of:

1. ZMQ
2. Python


# Decision:

Python and ZMQ are the main tools that are working in the business logic layer, with ZMQ
handling the messaging systems that are working in the application.


# Consequences: 

The ZMQ messaging system is used with sockets and nodes to pass messages across and access
through the business logic layer. This allows this data to be created, stored, and changed
within the application. 
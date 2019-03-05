# Explanation of Restful Application

# Status: accepted

# Context: 

A  Restful environment should include:

1. Uniform interface
2. Client-server
3. Sateless
4. Cacheable
5. Layered system
6. Code on demand (optional)

# Decision:

The application is now supporting a MySQL container connected to another container that includes
an Apache webserver. The Guitar Shop database is being displayed with the MySQL container. The
application now has a uniform interface, with a common way to access things through a uniform
resource locator within the php files and the Apache server. The application is also separated
through the server application and the client application, and they work independently of each-other. 

The application is also stateless, as it treats every new request as a new session when using any
of the CRUD operations. However the application is not cacheable, this meaning when there is an
HTTP response it cannot be cached. In other words, that data can't be stored and used later. This would
be an important part to add to the application to make it fore restful as this increases efficiency and
functionality. The application does not have a layered system. The operations are not located on different
servers. However, this would be important to add for certain reasons such as security within the application
if this was used in a practical way. The application does support code on demand though, which allows
you see retrive executable code for use within the MySQL container.


# Consequences: 

Minimal effort is required to make the environment operational. In using MySQL with the Apache server
inside of a Docker container we can send a zip file that is automatically operational to another user. With the adding of
the CRUD operations, the user can now alter the database by changing units inside of it. This makes changing the database
easier and more efficient. The application has also become more restful with these CRUD operations, which is explained
in the paragraph above. Basically, the functionality and efficiency of the application has been increased.

This is important in this application because if a company was using this database functionally they would
be able to track their products and prices as needed. They could use the CRUD operations to run an actual business.
Without these operations the application would be useless.
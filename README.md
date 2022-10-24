# activity-package-technical-test
1. All the database credentials could be added to the .env file
2. Events should be stored in a directory for instance Events and created Event classes in this directory and try to categorise the Events for example all Order, Post, etc Events.
3. Auth->user() instance could check if the user is authenticated then the action would be performed or a constructor could perform as a middleware to return true if the user is authenticated before the action is called by boot function.
4. The action for delete items is called "deleted" which could be soft deleted means we could have the record of the deleted items in the database.
5. The user name could be retrieved from the $user = new User() model $user->name.
6. Time based on milliseconds which illustrated the time retrieving record form database and performing an action.
7. One way could be authenticate the user before performing a job or to retrieve the faield jobs from the server by throwing exceptions on the code base while developing the functionality.
8. Following the Event Listener documentation, I would created two directories, one for Events and one for Listeners and organise the classed into relative Events as I mentioned earlier in this document such as Order, Post, etc then I would wrap the events with Exception handling class to catch any errors before production.

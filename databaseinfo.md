//These are the commands needed to create a database called movieusers in your local mongodb shell.
//be sure to insert each line individually.

//The users (Ryan) and (Mary) have the same data in their arrays.
//everyone else except for (One) has at least one movie or more in their array that is similar to Ryans array.


use movieusers

db.user.insertOne({ name: "Ryan", movies: ["The Matrix", "Inception", "Jaws", "Home Alone", "Tenet"]});

db.user.insertOne({ name: "Steve", movies: ["The Godfather", "Goodfellas", "Alien", "The Dark Knight", "The Matrix"]});

db.user.insertOne({ name: "Emily", movies: ["Pulp Fiction", "Spirited Away", "The Matrix", "Jaws", "Blade Runner"]});

db.user.insertOne({ name: "Amber", movies: ["Jaws", "The Matrix", "Inception", "Ghostbusters", "Die Hard"]});

db.user.insertOne({ name: "Bill", movies: ["Jaws", "Iron Man", "Tenet", "The Matrix", "Inception"]});

db.user.insertOne({ name: "Mary", movies: ["Jaws", "Home Alone", "Tenet", "The Matrix", "Inception"]});

db.user.insertOne({ name: "One", movies: ["Black Panther", "Casablanca", "Knives Out", "The Terminator", "Armageddon"]});
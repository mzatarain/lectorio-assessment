db = db.getSiblingDB('testDb');

db.createCollection('testColl');

db.testColl.insertMany([
 {
    name: 'Manuel',
    age: 30,
    city: 'Mexicali'
  },
  {
    name: 'John',
    age: 35,
    city: 'Los Angeles'
  },
  {
    name: 'Kimberly',
    age: 42,
    city: 'New Jersey'
  }  
]);
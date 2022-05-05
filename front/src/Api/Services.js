import axios from 'axios'

import qs from "qs";


const errorHandler = err => {
  throw err;
};

const login = (mail, pwd) => {
  var data = qs.stringify({
    mail,
    pwd
  })
  return axios(
    {
      methode: 'post',
      url: `http://localhost:8080/api/v1//clients/login?apikey=test`,
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
      },
      data
    }

  ).then(function (response) {
    return JSON.stringify(response.data);
  })
    .catch(function (error) {
      console.log(error);
    });
}

const getPlat = () => {
  return axios(
    {
  
  method: 'get',
  url: 'http://localhost:8080/api/v1/plats?apikey=test',
  headers: { 
    'Content-Type': 'application/json'
  }
}
).then(function (response) {
  console.log(response.data)
  return(response.data) ;
})
  .catch(function (error) {
    console.log(error);
  })
}
// login(mail, pwd) {

//   return this.srv.post('/clients/login?apikey=test', {mail, pwd}, )
//   .then(function (response) {
//     console.log(JSON.stringify(response.data));
//   })
//   .catch(function (error) {
//     console.log(error);
//   });


//     // .catch(errorHandler);
// },

// signup(firstname, lastname, service, role, email, password, confirmPassword, imageURL) {
//   return this.srv.post('/signup', {
//     firstname, 
//     lastname, 
//     service, 
//     role, 
//     email, 
//     password, 
//     confirmPassword,
//     imageURL
//   })
//     .then(response => response.data)
//     .catch(errorHandler);
// },

// loggedin() {
//   return this.srv.get('/loggedin')
//     .then(response => response.data)
//     .catch(errorHandler);
// },

// logout() {
//   return this.srv.get('/logout', {})
//     .then(response => response.data)
//     .catch(errorHandler);
// },

// edit(firstname, lastname, service, role, password, confirmPassword, imageURL) {
//   return this.srv.post('/edit', {
//     firstname, 
//     lastname, 
//     service, 
//     role, 
//     password,
//     confirmPassword,
//     imageURL
//   })
//     .then(response => response.data)
//     .catch(errorHandler);
// },

// upload(formdata) {
//   return this.srv.post('/upload', formdata)
//     .then(response => response.data)
//     .catch(errorHandler);
// },

// newBug(title, description, solution, services, status, severity){
//   return this.srv.post('/new-bug', {
//     title, 
//     description, 
//     solution, 
//     services, 
//     status, 
//     severity 
//   })
//   .then(response => response.data)
//   .catch(errorHandler);
// },

// bugsList(){
//   return this.srv.get('/bugs')
//   .then(response => response.data)
//   .catch(errorHandler);
// },

// serviceList(){
//   return this.srv.get('/services')
//   .then(response => response.data)
//   .catch(errorHandler);
// },

// newService(name, phone, email){
//   return this.srv.post('/new-service',{
//     name, 
//     phone,
//     email
//   })
//   .then(response => response.data)
//   .catch(errorHandler);
// }

export  {login, getPlat};
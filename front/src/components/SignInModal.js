import React, {useState} from 'react'
import {Form, Button,Modal} from "react-bootstrap";
import {login} from "../Api/Services"


function SignInModal({ showSignIn, setShowSignIn }) {
  const[values, setValues] = useState({
    email: "",
    password: ""
});
const handleChange = (event) => {  
  const {name, value} = event.target;
  setValues({...values,[name]: value});
};
const handleSubmit = (event) => {
  event.preventDefault();
  login(values.email, values.password)
    .then(response => {
      //this.setState({error: ""});
      //this.props.updateUser(response);
      console.log(response)
      setShowSignIn(false);
    })
    .catch(error => console.log( error.response.data.message))
  ;
}
  return (
    <Modal
        show={showSignIn}
        onHide={() => setShowSignIn(false)}
        dialogClassName="modal-90w"
        aria-labelledby="example-custom-modal-styling-title"
      >
        <Modal.Header closeButton>
          <Modal.Title id="SignIn">
            Sign In
          </Modal.Title>
        </Modal.Header>
        <Modal.Body>
          <Form className="modal-content form-elegant" onSubmit={handleSubmit}>
            <Form.Group className="mb-3" controlId="formBasicEmail">
              <Form.Label>Email address</Form.Label>
              <Form.Control name="email" type="email" placeholder="Enter email" onChange={handleChange} />
              <Form.Text className="text-muted">
                We will never share your email with anyone else.
              </Form.Text>
            </Form.Group>
          
            <Form.Group className="mb-3" controlId="formBasicPassword">
              <Form.Label>Password</Form.Label>
              <Form.Control name="password" type="password" placeholder="Password" onChange={handleChange} />
            </Form.Group>
            <Button variant="primary" type="submit">
              Sign In
            </Button>
          </Form>
        </Modal.Body>
      </Modal>
  )
}

export default SignInModal
import React, { useState,useEffect} from "react";
import * as  emailjs from '@emailjs/browser';
import { Form, Button, Modal, Row, Col } from "react-bootstrap";
import {getPlat} from "../Api/Services";

function MenuModal({showMenu, setShowMenu}) {
  const [p, setP] = useState([]);

  /*
  const [lastAnnonces, setLastAnnonces] = useState([]);

  useEffect(() => {
    const fetchData = async () => {
      try {
        const responseUser = await AnnonceService.getLastAnnonce(5);
        setLastAnnonces(responseUser);
      } catch (error) {
        console.error(error.message);
      }
    };

    fetchData();
  }, []);*/
  useEffect(()=>{
    const fetchData = async () => {
        try {
            const responseUser = await getPlat()
            setP(responseUser)
        } catch (error) {
            console.error(error.message);
          }
        }
        fetchData();
  }, []);
  let plat = [];
  let entree = [];
  let dessert = [];
  let boisson = [];

  p.forEach(element => {
    if(element.type == "Plat")
      plat.push(element); 
    if(element.type == "Entree")
      entree.push(element); 
    if(element.type == "Dessert")
      dessert.push(element);
    if(element.type == "Boisson")
      boisson.push(element);
  });



  return (
    <Modal
      show={showMenu}
      onHide={() => setShowMenu(false)}
      dialogClassName="modal-90w"
      aria-labelledby="example-custom-modal-styling-title"
    >
      <Modal.Header closeButton>
        <Modal.Title id="Menu">Menu</Modal.Title>
      </Modal.Header>
      <Modal.Body>
      <h3>Entree</h3>
        {entree.map((el, index)=>{
          return (
            <React.Fragment key={index}>
            <p>{el.nom} {el.prix}€</p>
            </React.Fragment>
          )
        })}
        <h3>Plat</h3>
        {plat.map((el, index)=>{
          return (
            <React.Fragment key={index}>
            <p>{el.nom} {el.prix}€</p>
            </React.Fragment>
          )
        })}
        <h3>Dessert</h3>
        {dessert.map((el, index)=>{
          return (
            <React.Fragment key={index}>
            <p>{el.nom} {el.prix}€</p>
            </React.Fragment>
          )
        })}
        <h3>Boisson</h3>
        {boisson.map((el, index)=>{
          return (
            <React.Fragment key={index}>
            <p>{el.nom} {el.prix}€</p>
            </React.Fragment>
          )
        })}
      </Modal.Body>
    </Modal>
  );
  }

export default MenuModal;

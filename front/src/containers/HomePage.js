import { useState } from "react";
<<<<<<< HEAD
import { Row, Col } from "react-bootstrap";
import MenuModal from "../components/MenuModal";
=======
import { Container, Row, Col } from "react-bootstrap";
>>>>>>> efc5345887c2fc9110a5c79aceca684949678f21
import NavBar from "../components/NavBar";
import ReservationModal from "../components/ReservationModal";
import SignInModal from "../components/SignInModal";
import SignUpModal from "../components/SignUpModal";
import "./HomeCss.css";

const HomePage = () => {
  const [showSignIn, setShowSignIn] = useState(false);
  const [showSignUp, setShowSignUp] = useState(false);
  const [showReservation, setShowReservation] = useState(false);
  const [showMenu, setShowMenu] = useState(false);
  return (
    <div>
<<<<<<< HEAD
      <NavBar
        setShowSignIn={setShowSignIn}
        setShowSignUp={setShowSignUp}
        setShowReservation={setShowReservation}
        setShowMenu={setShowMenu}
      />
      <h1>Bienvenue chez Hindi Food</h1>
      <p>Vous avez faim ? Ca tombe bien !</p>
      <div>
        <p>
          Nous pratiquons la cuisine indienne, traditionnelle, et même moderne
          afin de satisfaire tous les goûts et toutes les envies. Notre
          restaurant est ancré dans les valeurs et la culture indienne, des
          parfums aux saveurs en passant par les sons et lenvironnement, vous
          serez en immersion totale dans la culture indienne.
        </p>
      </div>
      <Row className="justify-content-md-center">
        <Col xs lg="3">
          <h5>Adresse :</h5>
          <p>
          Immeuble Le Sésame, 8 Rue Germain Soufflot, 78180 Montigny-le-Bretonneux
          </p>
        </Col>
        <Col xs lg="5" id="map" />
      </Row>

=======
      <Container>
        <NavBar
          setShowSignIn={setShowSignIn}
          setShowSignUp={setShowSignUp}
          setShowReservation={setShowReservation}
        />
      </Container>
      
        <div className="full-width pl-0 pr-0">
          <div className="visual-interne">
          </div>
        </div>
        <Container>
          <div className="titre">
            <h1>Bienvenue chez Hindi Food</h1>
          </div>
          <div>
            <Row>
              <Col md="6">
                <div className="texte_presentation p-4">
                  <h3>Vous avez faim ? Ca tombe bien !</h3>
                  <div>
                    <p>
                      Nous pratiquons la cuisine indienne, traditionnelle, et même moderne
                      afin de satisfaire tous les goûts et toutes les envies. Notre
                      restaurant est ancré dans les valeurs et la culture indienne, des
                      parfums aux saveurs en passant par les sons et lenvironnement, vous
                      serez en immersion totale dans la culture indienne.
                    </p>
                  </div>
                </div>
              </Col>
              <Col md="6">
                <div className="d-flex flex-row flex-wrap">
                  <div className="d-flex align-items-start p-4">
                    <img className="img-fluid" src="../../img1.jpg"></img>
                  </div>
                </div>
              </Col>
            </Row>
            
          </div>
          </Container>
          <div className="heure_com">
            <Container>
              <Row className="justify-content-md-center">
                <Col>
                <div><h2>Heures d'ouverture</h2></div>
                  <div>
                    <p> Lundi 12h - 14h30 / 19h - 23h30 <br></br>
                        Mardi 12h - 14h30 / 19h - 23h30 <br></br>
                        Mercredi 12h - 14h30 / 19h - 23h30 <br></br>
                        Jeudi 12h - 14h30 / 19h - 23h30  <br></br>
                        Vendredi 12h - 14h30 / 19h - 23h30  <br></br>
                        Samedi 12h - 14h30 / 19h - 23h30  <br></br>
                        Dimanche 12h - 14h30 / 19h - 23h30  <br></br>
                    </p>
                  </div>  
                    
                </Col>
                <Col>
                <div>
                  <h2>Commentaires Clients</h2>
                </div>
                <div>
                  <p>
                    Dorey a noté 5/5 <br></br>
                    Meilleurs restaurant Indien ever!
                  </p>
                </div>
                </Col>
              </Row>
            </Container>
          </div>
          <Container className="carte">
            <Row className="justify-content-md-center">
              <Col xs lg="12">
                <h5>Adresse :</h5>
                <p>
                Immeuble Le Sésame, 8 Rue Germain Soufflot, 78180 Montigny-le-Bretonneux
                </p>
              </Col>
              <Col xs lg="12" id="map" />
            </Row>
          </Container>
          
       
      
>>>>>>> efc5345887c2fc9110a5c79aceca684949678f21
      <SignUpModal showSignUp={showSignUp} setShowSignUp={setShowSignUp} />
      <SignInModal showSignIn={showSignIn} setShowSignIn={setShowSignIn} />
      <ReservationModal
        showReservation={showReservation}
        setShowReservation={setShowReservation}
      />
      <MenuModal showMenu={showMenu} setShowMenu={setShowMenu} />
    </div>
  );
};

export default HomePage;

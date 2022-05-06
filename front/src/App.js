/*import './App.css';
import HomePage from "./containers/HomePage";


function App() {
  return (
    <div className="App">
      <HomePage />
    </div>
  );
}

export default App;
*/
import './App.css';
import HomePage from "./containers/HomePage";
import PanierPage from './containers/PanierPage';
import ReactDOM from "react-dom/client";
import {BrowserRouter, Routes, Route} from "react-router-dom";
  
function App() {
  return (
    <div className="App">
      <BrowserRouter>
        <Routes>
          <Route path='' element={<HomePage/>}/>
          <Route path='/Panier' element={<PanierPage/>}/>
        </Routes>
      </BrowserRouter>
     
    </div>
  );
}

export default App;

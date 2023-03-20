import './App.css';
import Homepage from "./components/Homepage"
import Login from "./components/Login"
import Register from "./components/Register"
import {
  BrowserRouter as Router,
  Route

} from "react-router-dom";
import {useState} from 'react';
function App() {
  const [user,setLoginUser] = useState({

  })
  return (
    <div className="App">
    <Router>
      <Route exact path="/">
        {
          user && user._id ? <Homepage/>:<Login/>
        }<Homepage/></Route>
      <Route path="/Login">
        <Login setLoginUser={setLoginUser}/>
      </Route>
      <Route path="/Register">
        <Register/>
      </Route>
    </Router>

    </div>
  );
}

export default App;
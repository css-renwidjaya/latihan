import React, { Component, useEffect } from "react";
import ReactDOM from "react-dom";
import id from "./lang/id.json";
import en from "./lang/en.json";
// const App = () => {
//   useEffect(() => {
//     let lang = "";
//     if (lang === "en") {
//       lang = en;
//     } else if (lang === "id") {
//       lang = id;
//     } else {
//       lang = en;
//     }
//   });
//   return (
//     <>
//       <h1>
//         {id.hello} {id.name}
//       </h1>
//       <p>{id.description}</p>
//     </>
//   );
// };

class App extends Component {
  constructor(props) {
    super(props);
    this.state = {
      username: "Rendy Widjaya",
      age: "20",
    };
  }

  render() {
    return (
      <div>
        <h1>{this.props.username}</h1>
        <h1>{this.props.age}</h1>
      </div>
    );
  }
}

ReactDOM.render(<App />, document.getElementById("root"));

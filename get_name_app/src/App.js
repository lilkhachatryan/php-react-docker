import { useEffect, useState } from 'react';
import './App.css';

function App() {
 const [names, setNames] = useState([])

  useEffect(() => {
    async function fetchData() {
      const res = await fetch(`${process.env.REACT_APP_API_URL}/getname`).then(res => res.json())
      setNames(res)
    }

    fetchData();
  }, [])

  return (
    <div className="App">
      <header className="App-header">
        <p>
          {names[0] && names[0].name}
        </p>
      </header>
    </div>
  );
}

export default App;

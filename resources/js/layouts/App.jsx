import React from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter, Routes, Route, Link } from "react-router-dom";
import FeedsIndex from "../pages/Feeds/Index";
function App() {
  return (
    <BrowserRouter>
      <Routes>
        <Route path="/feed" element={<FeedsIndex />} />
      </Routes>
    </BrowserRouter>
  );
}
export default App;
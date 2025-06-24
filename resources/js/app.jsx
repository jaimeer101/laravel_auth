import './bootstrap';

import Alpine from 'alpinejs';

// window.Alpine = Alpine;

// Alpine.start();
import React from 'react';
import ReactDOM from 'react-dom';
import { createRoot } from 'react-dom/client';
import App from "./layouts/App";
const root = createRoot(document.getElementById('app'));
root.render(<App />);

##### API<small>uri</small>
## WebStorage

<p>Permite stocarea "permanenta" in browser a unor informatii de tip cheie - valoare sub forma de string.</p>

```
window.localStorage
// Set
window.localStorage.setItem('name', 'Serban Ghita');
window.localStorage.setItem('position', JSON.stringify({x: 10, y: 10}));
// Get
window.localStorage.getItem('name');
JSON.parse(window.localStorage.getItem('position'));
```
### Tools: CSS Media Queries

```css
/* Casual style */
@media (min-width: 30em) {}
@media (min-width: 40rem) {}

/* Twitter Bootstrap 3 style */
@media (min-width: 768px) {}
@media (min-width: 992px) {}
@media (min-width: 1200px) {}

/* Zurb Foundation 5 style */
@media only screen { } /* Define mobile styles */
@media only screen and (max-width: 40em) { } /* max-width 640px, mobile-only styles */
@media only screen and (min-width: 40.063em) { } /* min-width 641px, medium screens */
```

Docs: http://www.w3.org/TR/css3-mediaqueries/
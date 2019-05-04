<?php
namespace A;
function Hello() { echo __NAMESPACE__; }
namespace B;

function Hello() { echo __NAMESPACE__; }
namespace C;
\B\Hello();
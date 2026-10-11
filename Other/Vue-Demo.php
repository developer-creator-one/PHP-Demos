<!DOCTYPE html>
<html>
<head>
<title>Vue Demo</title>
<meta name="robots" content="index, follow, snippet, imageindex">
<meta name="googlebot" content="index, follow, snippet, imageindex">
<meta name="googlebot-news" content="index, follow, snippet, imageindex">
<link rel="stylesheet" type="text/css" href="/styles.css">
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<h1>Vue Demo</h1>

<!--
https://vuejs.org/tutorial/#step-2
https://vuejs.org/guide/quick-start
https://jsfiddle.net/yyx990803/2ke1ab0z/
-->

<script type="importmap">
  {
    "imports": {
      "vue": "https://unpkg.com/vue@3/dist/vue.esm-browser.js"
    }
  }
</script>

<div id="app">{{ name }}</div>

<script type="module">
  import { createApp, ref } from 'vue'
  
  createApp({
    data() {
     const name = ref('Computer');
     return { name };
    }
  }).mount('#app')
</script>

<h2>Source code of this page</h2>
<?php
highlight_file(__FILE__);
?>

</body>
</html>


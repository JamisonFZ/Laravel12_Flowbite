<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="description" content="em breve!" />

@include('partials.robots')
@include('partials.stylesheet')
@include('partials.favicons')
@include('partials.analytics')

<script>
      if (localStorage.getItem("color-theme") === "dark" || (!("color-theme" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
      document.documentElement.classList.add("dark");
      } else {
          document.documentElement.classList.remove("dark");
      }
</script>
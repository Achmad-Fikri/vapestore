<!DOCTYPE html>
<html lang="en">
<head>
	@include('home.css')
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <!-- header -->
   @include('home.header')
    <!-- ABOUT Section  -->
    @include('home.about')
    <!-- gallery Section  -->
   @include('home.gallery')
    <!-- BOOK TABLE Section  -->
    @include('home.book')
    <!-- BLOG Section  -->
    @include('home.blog')

    @include('home.footer')

</body>
</html>

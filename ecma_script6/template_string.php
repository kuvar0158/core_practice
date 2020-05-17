<!--example of template string -->

<script>
	const boidatas = {'name':'kuvar', 'age': 22, 'born':'uttar pradesh'}

	 const {name, age, born} =  boidatas;
	 let show = 'My name is'+name+'and my age '+age+'and i was born at'+born;
	 /*but you can actually wtrite code like that is here*/

	 let showoff = `my name is ${name} and my age ${age} and i was born at ${born}`
	 console.log(showoff);
</script>
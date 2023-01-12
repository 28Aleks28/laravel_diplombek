@extends(backpack_view('blank'))

@php	
	$widgets['after_content'][] = [
		'type'        => 'card',
		'wrapper' => ['class' => 'd-inline-block w-25'],   	
		'class' => 'card text-white bg-primary mb-2',
    	'content'     => [
				'header' => 'Кол-во пользователей',
				'body' => $userCount
		],    	
	];

	$widgets['after_content'][] = [
		'type'        => 'card',
		'wrapper' => ['class' => 'd-inline-block w-25'],   	
		'class' => 'card text-white bg-primary mb-2',
    	'content'     => [
				'header' => 'header',
				'body' => 'body',
		],    	
	];

	$widgets['after_content'][] = [
		'type'        => 'card',
		'wrapper' => ['class' => 'd-inline-block w-25'],   	
		'class' => 'card text-white bg-primary mb-2',
    	'content'     => [
				'header' => 'header',
				'body' => 'body',
		],    	
	];

	$widgets['after_content'][] = [
		'type'        => 'card',
		'wrapper' => ['class' => 'd-inline-block w-25'],   	
		'class' => 'card text-white bg-primary mb-2',
    	'content'     => [
				'header' => 'header',
				'body' => 'body',
		],    	
	];
@endphp

@section('content')
	<p>Это административная панель</p>
	
@endsection
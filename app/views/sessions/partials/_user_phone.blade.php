{{ Form::open(['route'=> ['sessions.store'], 'id' => 'sign_in_form']) }}

  {{ Form::hidden('candidate_id', (isset($candidate->id) ? $candidate->id : null)) }}

  {{ Form::label('first_name', 'First Name') }}
  {{ form_error('first_name', $errors) }}
  {{ Form::text('first_name', null, ['placeholder' => 'What\'s your name?']) }}

  {{ Form::label('birthdate', 'Birthdate') }}
  {{ form_error('birthdate', $errors) }}
  {{ Form::text('birthdate',  null, ['placeholder' => 'MM/DD/YYYY']) }}

  {{ Form::label('phone', 'Cell Number') }}
  {{ form_error('phone', $errors) }}
  {{ Form::text('phone', null, ['placeholder' => '555-867-5309']) }}

  {{ Form::submit('Count My Vote', ['class' => 'button -primary']) }}
{{ Form::close() }}
<?php
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

...

/**
     * Get the needed authorization credentials from the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function credentials(Request $request)
    {
        $credentials =$request->only($this->username(), 'password');
        $credentials['status'] = '1';
        return $credentials;
    }

/**
     * Get the failed login response instance.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function sendFailedLoginResponse(Request $request)
    {
        $errors = [$this->username() => trans('auth.failed')];

        // Fetching user from database
        $user = User::where($this->username(), $request->{$this->username()})->first();

        // Checking if user is sucessfully logged in, if login is sucessfull
        // and status is false i.e. 0 w will override the default error message
 
        if($user &amp;&amp; Hash::check($request->password, $user->password) &amp;&amp; $user->status !=1){
            $errors = [$this->username() => 'Your account is not activated.'];
        }

        if ($request->expectsJson()) {
            # code...
            return response()->json($errors,422);
        }

        return redirect()->back()->withInput($request->only($this->username(), 'remember'))->withErrors($errors);
    }

<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatemessagesRequest;
use App\Http\Requests\UpdatemessagesRequest;
use App\Repositories\messagesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\messages\index;
use App\Mail\MessageReceived;
use Flash;
use Response;

class MessagesController extends AppBaseController
{
    /** @var  messagesRepository */
    private $messagesRepository;

    public function __construct(messagesRepository $messagesRepo)
    {
        $this->messagesRepository = $messagesRepo;
    }

    /**
     * Display a listing of the messages.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $messages = $this->messagesRepository->all();

        return view('messages.index')
            ->with('messages', $messages);
    }

    /**
     * Show the form for creating a new messages.
     *
     * @return Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created messages in storage.
     *
     * @param CreatemessagesRequest $request
     *
     * @return Response
     */
    public function store()
    {
        $message = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3'
        ], [
            'name.required' => __('I need your name')
        ]);

        Mail::to('artu.mar1903@gmail.com')->queue(new MessageReceived($message));

        return 'Mensaje enviado';
    }

    /**
     * Display the specified messages.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified messages.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit()
    {

    }

    /**
     * Update the specified messages in storage.
     *
     * @param int $id
     * @param UpdatemessagesRequest $request
     *
     * @return Response
     */
    public function update()
    {

    }

    /**
     * Remove the specified messages from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy()
    {

    }
}

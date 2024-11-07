<?php
namespace App\Mail;

use App\Models\Member;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Content;

class MemberWelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    protected Member $member;
    protected string $password;

    // Constructor to accept parameters
    public function __construct(Member $member, string $password)
    {
        $this->member = $member;
        $this->password = $password;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Member Welcome Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.member_welcome', // Use the correct view name
            with: [
                'member' => $this->member,
                'password' => $this->password,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}



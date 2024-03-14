<?php

return [
  'company' => [
    'address' => '123 Main St, New York, NY 10030',
    'phone' => '+012 345 6789',
    'email' => 'support@shipa.com',
  ],
  'admin' => [
    'email' => 'miracleagbosixtus@gmail.com',
  ],
  'socials' => [
    'display' => false,
    'facebook' => 'https://www.facebook.com/shipa',
    'twitter' => 'https://www.twitter.com/shipa',
    'instagram' => 'https://www.instagram.com/shipa',
    'youtube' => 'https://www.youtube.com/shipa',
  ],
  'faq' => [
    'title' => 'Frequently Asked Questions',
    'short' => 'FAQ',
    'questions' => [
      'How do I track my goods?' => 'You can track your goods by entering the tracking number provided to you on our website.',
      "Do I have to pay customs fees?" => "Customs fees depend on the laws of the country you're shipping to.",
      'Can I track multiple shipments?' => 'Yes, you can track all your goods simultaneously by entering the tracking numbers separated by a comma.',
      'How do I request a refund?' => 'You can request a refund by contacting our support team.',
      'How can I contact support?' => 'You can contact our support team by sending an email to {support_email} or by calling {support_phone}.',
    ],
  ],
  'tracking' => [
    'title' => 'Monitor Your Shipment',
    'short' => 'Track',
    'placeholder' => 'Up to 20 tracking numbers, separated by comma.',
    'button' => 'Track',
    'keep_invalid_numbers' => false,
  ],
  'status' => [
    'stages' => ['Processing', 'Arrived', 'Departed', 'In Transit', 'On Hold', 'Customs Check', 'Delivered', 'Returned', 'Cancelled'],
  ],
];

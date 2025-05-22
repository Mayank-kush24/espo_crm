<?php
return (object) [
  'scopes' => (object) [
    'CCars' => (object) [
      'read' => 'own',
      'stream' => 'own',
      'edit' => 'own',
      'delete' => 'no',
      'create' => 'no'
    ],
    'User' => (object) [
      'read' => 'own',
      'edit' => 'no'
    ],
    'Team' => (object) [
      'read' => 'team'
    ],
    'Import' => false,
    'Webhook' => false,
    'Currency' => false,
    'Email' => false,
    'EmailAccountScope' => false,
    'EmailTemplate' => false,
    'EmailTemplateCategory' => false,
    'ExternalAccount' => false,
    'GlobalStream' => false,
    'Template' => false,
    'WorkingTimeCalendar' => false,
    'Account' => false,
    'Activities' => false,
    'Calendar' => false,
    'Call' => false,
    'Campaign' => false,
    'Case' => false,
    'Contact' => false,
    'Document' => false,
    'DocumentFolder' => false,
    'KnowledgeBaseArticle' => false,
    'KnowledgeBaseCategory' => false,
    'Lead' => false,
    'Meeting' => false,
    'Opportunity' => false,
    'TargetList' => false,
    'TargetListCategory' => false,
    'Task' => false,
    'CInternFieldAccess' => false,
    'Target' => false,
    'Note' => (object) [
      'read' => 'own',
      'edit' => 'own',
      'delete' => 'own',
      'create' => 'yes'
    ],
    'Portal' => (object) [
      'read' => 'all',
      'edit' => 'no',
      'delete' => 'no',
      'create' => 'no'
    ],
    'Attachment' => (object) [
      'read' => 'own',
      'edit' => 'own',
      'delete' => 'own',
      'create' => 'yes'
    ],
    'EmailAccount' => (object) [
      'read' => 'own',
      'edit' => 'own',
      'delete' => 'own',
      'create' => 'yes'
    ],
    'EmailFilter' => (object) [
      'read' => 'own',
      'edit' => 'own',
      'delete' => 'own',
      'create' => 'yes'
    ],
    'EmailFolder' => (object) [
      'read' => 'own',
      'edit' => 'own',
      'delete' => 'own',
      'create' => 'yes'
    ],
    'GroupEmailFolder' => (object) [
      'read' => 'team',
      'edit' => 'no',
      'delete' => 'no',
      'create' => 'no'
    ],
    'Preferences' => (object) [
      'read' => 'own',
      'edit' => 'own',
      'delete' => 'no',
      'create' => 'no'
    ],
    'Notification' => (object) [
      'read' => 'own',
      'edit' => 'no',
      'delete' => 'own',
      'create' => 'no'
    ],
    'ActionHistoryRecord' => (object) [
      'read' => 'own'
    ],
    'Role' => false,
    'PortalRole' => false,
    'ImportError' => false,
    'ImportEml' => false,
    'WorkingTimeRange' => false,
    'Stream' => true,
    'MassEmail' => false,
    'CampaignLogRecord' => false,
    'CampaignTrackingUrl' => false,
    'EmailQueueItem' => false
  ],
  'fields' => (object) [
    'Email' => (object) [],
    'Team' => (object) [],
    'User' => (object) [
      'gender' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ],
      'avatarColor' => (object) [
        'read' => 'yes',
        'edit' => 'no'
      ],
      'dashboardTemplate' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ],
      'workingTimeCalendar' => (object) [
        'read' => 'yes',
        'edit' => 'no'
      ],
      'password' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ],
      'passwordConfirm' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ],
      'auth2FA' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ],
      'authMethod' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ],
      'apiKey' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ],
      'secretKey' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ],
      'token' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ]
    ],
    'Account' => (object) [],
    'Call' => (object) [
      'uid' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ]
    ],
    'Campaign' => (object) [],
    'Case' => (object) [],
    'Contact' => (object) [],
    'Document' => (object) [],
    'DocumentFolder' => (object) [],
    'KnowledgeBaseArticle' => (object) [],
    'KnowledgeBaseCategory' => (object) [],
    'Lead' => (object) [],
    'Meeting' => (object) [
      'uid' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ]
    ],
    'Opportunity' => (object) [],
    'TargetList' => (object) [],
    'TargetListCategory' => (object) [],
    'Task' => (object) [],
    'CCars' => (object) [
      'bodyType' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ],
      'brand' => (object) [
        'read' => 'yes',
        'edit' => 'yes'
      ],
      'color' => (object) [
        'read' => 'yes',
        'edit' => 'yes'
      ],
      'district' => (object) [
        'read' => 'yes',
        'edit' => 'no'
      ],
      'driveTrain' => (object) [
        'read' => 'yes',
        'edit' => 'no'
      ],
      'enginePowerHP' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ],
      'engineSizecc' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ],
      'fuelType' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ],
      'listingDate' => (object) [
        'read' => 'yes',
        'edit' => 'no'
      ],
      'listingID' => (object) [
        'read' => 'yes',
        'edit' => 'no'
      ],
      'listingTitle' => (object) [
        'read' => 'yes',
        'edit' => 'no'
      ],
      'mileagekm' => (object) [
        'read' => 'yes',
        'edit' => 'no'
      ],
      'name' => (object) [
        'read' => 'yes',
        'edit' => 'no'
      ],
      'paintAndPartsCondition' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ],
      'priceTRY' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ],
      'sellerType' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ],
      'series' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ],
      'tradeInAvailable' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ],
      'transmissionType' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ],
      'vehicleTaxTRY' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ],
      'year' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ]
    ],
    'CInternFieldAccess' => (object) [],
    'ActionHistoryRecord' => (object) [
      'authToken' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ],
      'authLogRecord' => (object) [
        'read' => 'no',
        'edit' => 'no'
      ]
    ],
    'EmailAccount' => (object) [
      'assignedUser' => (object) [
        'read' => 'yes',
        'edit' => 'no'
      ]
    ],
    'EmailFolder' => (object) [
      'assignedUser' => (object) [
        'read' => 'yes',
        'edit' => 'no'
      ]
    ]
  ],
  'permissions' => (object) [
    'assignment' => 'no',
    'message' => 'no',
    'mention' => 'team',
    'userCalendar' => 'no',
    'audit' => 'no',
    'export' => 'no',
    'massUpdate' => 'no',
    'user' => 'no',
    'portal' => 'no',
    'groupEmailAccount' => 'no',
    'followerManagement' => 'no',
    'dataPrivacy' => 'no'
  ]
];

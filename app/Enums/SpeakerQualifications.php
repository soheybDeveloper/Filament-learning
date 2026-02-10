<?php

namespace App\Enums;

use Filament\Support\Contracts\HasDescription;
use Filament\Support\Contracts\HasLabel;

enum SpeakerQualifications: string implements HasLabel, HasDescription
{
    case BusinessLeader = 'business-leader';
    case CharismaticSpeaker = 'charismatic-speaker';
    case FirstTimeSpeaker = 'first-time-speaker';
    case HometownHero = 'hometown-hero';
    case WorksInHumanitarianField = 'humanitarian-field';
    case LaracastsContributor = 'laracasts-contributor';
    case LargeTwitterFollowing = 'large-twitter-following';
    case LargeYouTubeFollowing = 'large-youtube-following';
    case OpenSourceCreator = 'open-source-creator';
    case UniquePerspective = 'unique-perspective';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::BusinessLeader => 'Business Leader',
            self::CharismaticSpeaker => 'Charismatic Speaker',
            self::FirstTimeSpeaker => 'First Time Speaker',
            self::HometownHero => 'Hometown Hero',
            self::WorksInHumanitarianField => 'Works in Humanitarian Field',
            self::LaracastsContributor => 'Laracasts Contributor',
            self::LargeTwitterFollowing => 'Large Twitter Following',
            self::LargeYouTubeFollowing => 'Large YouTube Following',
            self::OpenSourceCreator => 'Open Source Creator / Maintainer',
            self::UniquePerspective => 'Unique Perspective',
        };
    }

    public function getDescription(): ?string
    {
        return match ($this) {
            self::BusinessLeader => 'An individual with a proven track record of leading successful businesses or large-scale projects.',
            self::CharismaticSpeaker => 'A speaker known for their engaging delivery and ability to captivate an audience.',
            self::FirstTimeSpeaker => 'A newcomer to the speaking circuit, providing a fresh take on industry topics.',
            self::HometownHero => 'A local favorite or community leader whose insights resonate deeply with homegrown audiences.',
            self::WorksInHumanitarianField => 'Dedicated professionals working to improve societal well-being and provide aid.',
            self::LaracastsContributor => 'Experts who have enriched the community with content on Laracasts.',
            self::LargeTwitterFollowing => 'Influencers with a significant reach and impact on Twitter.',
            self::LargeYouTubeFollowing => 'Content creators with a large and loyal following on YouTube.',
            self::OpenSourceCreator => 'The brains behind popular open-source software, driving innovation and collaboration.',
            self::UniquePerspective => 'Individuals who bring a diverse and uncommon viewpoint to the table.',
        };
    }

    public static function allLabels(): array
    {
        return collect(self::cases())->flatMap(
            fn(self $qualification) => [
                $qualification->value => $qualification->getLabel(),
            ]
        )->toArray();
    }

    public static function allDescriptions(): array
    {
        return collect(self::cases())->flatMap(
            fn(self $qualification) => [
                $qualification->value => $qualification->getDescription(),
            ]
        )->toArray();
    }
}

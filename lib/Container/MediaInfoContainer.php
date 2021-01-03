<?php

namespace OCA\MediaInfoLib\Container;

use OCA\MediaInfoLib\DumpTrait;
use OCA\MediaInfoLib\Type\AbstractType;
use OCA\MediaInfoLib\Type\Audio;
use OCA\MediaInfoLib\Type\General;
use OCA\MediaInfoLib\Type\Image;
use OCA\MediaInfoLib\Type\Menu;
use OCA\MediaInfoLib\Type\Other;
use OCA\MediaInfoLib\Type\Subtitle;
use OCA\MediaInfoLib\Type\Video;

class MediaInfoContainer implements \JsonSerializable
{
    use DumpTrait;

    public const GENERAL_CLASS = 'OCA\MediaInfoLib\Type\General';
    public const AUDIO_CLASS = 'OCA\MediaInfoLib\Type\Audio';
    public const IMAGE_CLASS = 'OCA\MediaInfoLib\Type\Image';
    public const VIDEO_CLASS = 'OCA\MediaInfoLib\Type\Video';
    public const SUBTITLE_CLASS = 'OCA\MediaInfoLib\Type\Subtitle';
    public const MENU_CLASS = 'OCA\MediaInfoLib\Type\Menu';
    public const OTHER_CLASS = 'OCA\MediaInfoLib\Type\Other';

    /**
     * @var string
     */
    private $version;

    /**
     * @var General
     */
    private $general;

    /**
     * @var Audio[]
     */
    private $audios = [];

    /**
     * @var Video[]
     */
    private $videos = [];

    /**
     * @var Subtitle[]
     */
    private $subtitles = [];

    /**
     * @var Image[]
     */
    private $images = [];

    /**
     * @var Menu[]
     */
    private $menus = [];

    /**
     * @var Other[]
     */
    private $others = [];

    /**
     * @return General|null
     */
    public function getGeneral(): ?General
    {
        return $this->general;
    }

    /**
     * @return Audio[]
     */
    public function getAudios(): array
    {
        return $this->audios;
    }

    /**
     * @return Image[]
     */
    public function getImages(): array
    {
        return $this->images;
    }

    /**
     * @return Menu[]
     */
    public function getMenus(): array
    {
        return $this->menus;
    }

    /**
     * @return Other[]
     */
    public function getOthers(): array
    {
        return $this->others;
    }

    /**
     * @param string $version
     */
    public function setVersion($version): void
    {
        $this->version = $version;
    }

    /**
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }

    /**
     * @return Video[]
     */
    public function getVideos(): array
    {
        return $this->videos;
    }

    /**
     * @return Subtitle[]
     */
    public function getSubtitles(): array
    {
        return $this->subtitles;
    }

    /**
     * @param General $general
     */
    public function setGeneral($general): void
    {
        $this->general = $general;
    }

    /**
     * @param AbstractType $trackType
     *
     * @throws \Exception
     */
    public function add(AbstractType $trackType): void
    {
        switch (get_class($trackType)) {
            case self::AUDIO_CLASS:
                $this->addAudio($trackType);
                break;
            case self::VIDEO_CLASS:
                $this->addVideo($trackType);
                break;
            case self::IMAGE_CLASS:
                $this->addImage($trackType);
                break;
            case self::GENERAL_CLASS:
                $this->setGeneral($trackType);
                break;
            case self::SUBTITLE_CLASS:
                $this->addSubtitle($trackType);
                break;
            case self::MENU_CLASS:
                $this->addMenu($trackType);
                break;
            case self::OTHER_CLASS:
                $this->addOther($trackType);
                break;
            default:
                throw new \Exception('Unknown type');
        }
    }

    /**
     * @param Audio $audio
     */
    private function addAudio(Audio $audio): void
    {
        $this->audios[] = $audio;
    }

    /**
     * @param Video $video
     */
    private function addVideo(Video $video): void
    {
        $this->videos[] = $video;
    }

    /**
     * @param Image $image
     */
    private function addImage(Image $image): void
    {
        $this->images[] = $image;
    }

    /**
     * @param Subtitle $subtitle
     */
    private function addSubtitle(Subtitle $subtitle): void
    {
        $this->subtitles[] = $subtitle;
    }

    /**
     * @param Menu $menu
     */
    private function addMenu(Menu $menu): void
    {
        $this->menus[] = $menu;
    }

    /**
     * @param Other $other
     */
    private function addOther(Other $other): void
    {
        $this->others[] = $other;
    }
}

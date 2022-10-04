<?php
namespace GDO\AboutMe;

use GDO\Core\GDO_Module;
use GDO\UI\GDT_Message;
use GDO\User\GDT_ACLRelation;

/**
 * Add an "about me" field to the profile.
 * The register module copies the signup aboutme as a friendency.
 * 
 * @author gizmore
 * @since 7.0.1
 */
final class Module_AboutMe extends GDO_Module
{
	
	public function getDependencies() : array
	{
		return [
			'Register',
		];
	}
	
	public function getUserSettingBlobs() : array
	{
		return [
			GDT_Message::make('about_me')->max(4096),
		];
	}
	
	public function getACLDefaults() : ?array
	{
		return [
			'about_me' => [GDT_ACLRelation::MEMBERS, 0, null],
		];
	}
	
}

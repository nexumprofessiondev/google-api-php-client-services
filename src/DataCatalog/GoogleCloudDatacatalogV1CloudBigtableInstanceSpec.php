<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\DataCatalog;

class GoogleCloudDatacatalogV1CloudBigtableInstanceSpec extends \Google\Collection
{
  protected $collection_key = 'cloudBigtableClusterSpecs';
  protected $cloudBigtableClusterSpecsType = GoogleCloudDatacatalogV1CloudBigtableInstanceSpecCloudBigtableClusterSpec::class;
  protected $cloudBigtableClusterSpecsDataType = 'array';
  public $cloudBigtableClusterSpecs = [];

  /**
   * @param GoogleCloudDatacatalogV1CloudBigtableInstanceSpecCloudBigtableClusterSpec[]
   */
  public function setCloudBigtableClusterSpecs($cloudBigtableClusterSpecs)
  {
    $this->cloudBigtableClusterSpecs = $cloudBigtableClusterSpecs;
  }
  /**
   * @return GoogleCloudDatacatalogV1CloudBigtableInstanceSpecCloudBigtableClusterSpec[]
   */
  public function getCloudBigtableClusterSpecs()
  {
    return $this->cloudBigtableClusterSpecs;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDatacatalogV1CloudBigtableInstanceSpec::class, 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1CloudBigtableInstanceSpec');
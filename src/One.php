<?php

namespace One;

class One extends OneBase {
    /**
     * Generate and return VNC token only
     *
     * @param int $a The VM ID.
     * @return \One\Resource
     */
    public function vmVnctokenonly(int $a) {
        return $this->makeCall('one.vm.vnctokenonly', $a);
    }

    /**
     * Generate and return VNC token including VM details
     *
     * @param int $a The VM ID.
     * @return \One\Resource
     */
    public function vmVnc(int $a) {
        return $this->makeCall('one.vm.vnc', $a);
    }

    /**
     * Generate and return VNC token including VM details
     *
     * @param int $a The VM ID.
     * @return \One\Resource
     */
    public function vmVnctoken(int $a) {
        return $this->makeCall('one.vm.vnctoken', $a);
    }

    /**
     * Allocates a new template in OpenNebula.
     *
     * @param string $a A string containing the template contents. Syntax can be the usual attribute=value or XML.
     * @return \One\Resource
     */
    public function templateAllocate(string $a) {
        return $this->makeCall('one.template.allocate', $a);
    }

    /**
     * Clones an existing virtual machine template.
     *
     * @param int $a The ID of the template to be cloned.
     * @param string $b Name for the new template.
     * @param bool $c true to clone the template plus any image defined in DISK. The new IMAGE_ID is set into each DISK.
     * @return \One\Resource
     */
    public function templateClone(int $a, string $b, bool $c) {
        return $this->makeCall('one.template.clone', $a, $b, $c);
    }

    /**
     * Deletes the given template from the pool.
     *
     * @param int $a The object ID.
     * @param bool $b true to delete the template plus any image defined in DISK.
     * @return \One\Resource
     */
    public function templateDelete(int $a, bool $b) {
        return $this->makeCall('one.template.delete', $a, $b);
    }

    /**
     * Replaces the template contents.
     *
     * @param int $a The object ID.
     * @param string $b Name for the new VM instance. If it is an empty string, OpenNebula will assign one automatically.
     * @param bool $c False to create the VM on pending (default), True to create it on hold.
     * @param string $d A string containing an extra template to be merged with the one being instantiated. It can be empty. Syntax can be the usual attribute=value or XML.
     * @param bool $e true to create a private persistent copy of the template plus any image defined in DISK, and instantiate that copy.
     * @return \One\Resource
     */
    public function templateInstantiate(int $a, string $b, bool $c, string $d, bool $e) {
        return $this->makeCall('one.template.instantiate', $a, $b, $c, $d, $e);
    }

    /**
     * Changes the permission bits of a template.
     *
     * @param int $a The object ID.
     * @param int $b USER USE bit. If set to -1, it will not change.
     * @param int $c USER MANAGE bit. If set to -1, it will not change.
     * @param int $d USER ADMIN bit. If set to -1, it will not change.
     * @param int $e GROUP USE bit. If set to -1, it will not change.
     * @param int $f GROUP MANAGE bit. If set to -1, it will not change.
     * @param int $g GROUP ADMIN bit. If set to -1, it will not change.
     * @param int $h OTHER USE bit. If set to -1, it will not change.
     * @param int $i OTHER MANAGE bit. If set to -1, it will not change.
     * @param int $j OTHER ADMIN bit. If set to -1, it will not change.
     * @param bool $k true to chmod the template plus any image defined in DISK.
     * @return \One\Resource
     */
    public function templateChmod(int $a, int $b, int $c, int $d, int $e, int $f, int $g, int $h, int $i, int $j, bool $k) {
        return $this->makeCall('one.template.chmod', $a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $k);
    }

    /**
     * Changes the ownership of a template.
     *
     * @param int $a The object ID.
     * @param int $b The User ID of the new owner. If set to -1, the owner is not changed.
     * @param int $c The Group ID of the new group. If set to -1, the group is not changed.
     * @return \One\Resource
     */
    public function templateChown(int $a, int $b, int $c) {
        return $this->makeCall('one.template.chown', $a, $b, $c);
    }

    /**
     * Renames a template.
     *
     * @param int $a The object ID.
     * @param string $b The new name.
     * @return \One\Resource
     */
    public function templateRename(int $a, string $b) {
        return $this->makeCall('one.template.rename', $a, $b);
    }

    /**
     * Retrieves information for the template.
     *
     * @param int $a The object ID.
     * @param bool $b optional flag to process the template and include extended information, such as the SIZE for each DISK
     * @param bool $c optional flag to decrypt contained secrets, valid only for admin
     * @return \One\Resource
     */
    public function templateInfo(int $a, bool $b, bool $c) {
        return $this->makeCall('one.template.info', $a, $b, $c);
    }

    /**
     * Retrieves information for all or part of the Resources in the pool.
     *
     * @param int $a Filter flag  -4: Resources belonging to the user's primary group  -3: Resources belonging to the user  -2: All resources  -1: Resources belonging to the user and any of his groups * &gt;= 0: UID User's Resources
     * @param int $b When the next parameter is &gt;= -1 this is the Range start ID. Can be -1. For smaller values this is the offset used for pagination.
     * @param int $c For values &gt;= -1 this is the Range end ID. Can be -1 to get until the last ID. For values &lt; -1 this is the page size used for pagination.
     * @return \One\Resource
     */
    public function templatepoolInfo(int $a, int $b, int $c) {
        return $this->makeCall('one.templatepool.info', $a, $b, $c);
    }

    /**
     * Locks a Template.
     *
     * @param int $a The object ID.
     * @param int $b Lock level: use (1), manage (2), admin (3), all (4)
     * @return \One\Resource
     */
    public function templateLock(int $a, int $b) {
        return $this->makeCall('one.template.lock', $a, $b);
    }

    /**
     * Unlocks a Template.
     *
     * @param int $a The object ID.
     * @return \One\Resource
     */
    public function templateUnlock(int $a) {
        return $this->makeCall('one.template.unlock', $a);
    }

    /**
     * Allocates a new virtual machine in OpenNebula.
     *
     * @param string $a A string containing the template for the vm. Syntax can be the usual attribute=value or XML.
     * @param bool $b False to create the VM on pending (default), True to create it on hold.
     * @return \One\Resource
     */
    public function vmAllocate(string $a, bool $b) {
        return $this->makeCall('one.vm.allocate', $a, $b);
    }

    /**
     * initiates the instance of the given vmid on the target host.
     *
     * @param int $a The object ID.
     * @param int $b The Host ID of the target host where the VM will be deployed.
     * @param bool $c true to enforce the Host capacity is not overcommitted.
     * @param int $d The Datastore ID of the target system datastore where the VM will be deployed. It is optional, and can be set to -1 to let OpenNebula choose the datastore.
     * @param string $e Template with network scheduling results for NIC in AUTO mode.
     * @return \One\Resource
     */
    public function vmDeploy(int $a, int $b, bool $c, int $d, string $e) {
        return $this->makeCall('one.vm.deploy', $a, $b, $c, $d, $e);
    }

    /**
     * submits an action to be performed on a virtual machine.
     *
     * @param string $a the action name to be performed, see below.
     * @param int $b The object ID.
     * @return \One\Resource
     */
    public function vmAction(string $a, int $b) {
        return $this->makeCall('one.vm.action', $a, $b);
    }

    /**
     * migrates one virtual machine (vid) to the target host (hid).
     *
     * @param int $a The object ID.
     * @param int $b the target host id (hid) where we want to migrate the vm.
     * @param bool $c if true we are indicating that we want livemigration, otherwise false.
     * @param bool $d true to enforce the Host capacity is not overcommitted.
     * @param int $e the target system DS id where we want to migrate the vm.
     * @param int $f The migration type (0 save, 1 poweroff, 2 poweroff hard).
     * @return \One\Resource
     */
    public function vmMigrate(int $a, int $b, bool $c, bool $d, int $e, int $f) {
        return $this->makeCall('one.vm.migrate', $a, $b, $c, $d, $e, $f);
    }

    /**
     * Sets the disk to be saved in the given image.
     *
     * @param int $a The object ID.
     * @param int $b Disk ID of the disk we want to save.
     * @param string $c Name for the new Image where the disk will be saved.
     * @param string $d Type for the new Image. If it is an empty string, then the default one will be used. See the existing types in the Image template reference.
     * @param int $e Id of the snapshot to export, if -1 the current image state will be used.
     * @return \One\Resource
     */
    public function vmDisksaveas(int $a, int $b, string $c, string $d, int $e) {
        return $this->makeCall('one.vm.disksaveas', $a, $b, $c, $d, $e);
    }

    /**
     * Takes a new snapshot of the disk image
     *
     * @param int $a The object ID.
     * @param int $b Disk ID of the disk we want to snpashot.
     * @param string $c Description for the snapshot.
     * @return \One\Resource
     */
    public function vmDisksnapshotcreate(int $a, int $b, string $c) {
        return $this->makeCall('one.vm.disksnapshotcreate', $a, $b, $c);
    }

    /**
     * Deletes a disk snapshot
     *
     * @param int $a The object ID.
     * @param int $b Disk ID of the disk we want to delete.
     * @param int $c ID of the snapshot to be deleted.
     * @return \One\Resource
     */
    public function vmDisksnapshotdelete(int $a, int $b, int $c) {
        return $this->makeCall('one.vm.disksnapshotdelete', $a, $b, $c);
    }

    /**
     * Reverts disk state to a previously taken snapshot
     *
     * @param int $a The object ID.
     * @param int $b Disk ID of the disk to revert its state.
     * @param int $c Snapshot ID to revert the disk state to.
     * @return \One\Resource
     */
    public function vmDisksnapshotrevert(int $a, int $b, int $c) {
        return $this->makeCall('one.vm.disksnapshotrevert', $a, $b, $c);
    }

    /**
     * Renames a disk snapshot
     *
     * @param int $a VM ID.
     * @param int $b Disk ID.
     * @param int $c Snapshot ID.
     * @param string $d New snapshot name.
     * @return \One\Resource
     */
    public function vmDisksnapshotrename(int $a, int $b, int $c, string $d) {
        return $this->makeCall('one.vm.disksnapshotrename', $a, $b, $c, $d);
    }

    /**
     * Attaches a new disk to the virtual machine
     *
     * @param int $a The object ID.
     * @param string $b A string containing a single DISK vector attribute. Syntax can be the usual attribute=value or XML.
     * @return \One\Resource
     */
    public function vmAttach(int $a, string $b) {
        return $this->makeCall('one.vm.attach', $a, $b);
    }

    /**
     * Detaches a disk from a virtual machine
     *
     * @param int $a The object ID.
     * @param int $b The disk ID.
     * @return \One\Resource
     */
    public function vmDetach(int $a, int $b) {
        return $this->makeCall('one.vm.detach', $a, $b);
    }

    /**
     * Resizes a disk of a virtual machine
     *
     * @param int $a The object ID.
     * @param int $b The disk ID.
     * @param string $c The new size string.
     * @return \One\Resource
     */
    public function vmDiskresize(int $a, int $b, string $c) {
        return $this->makeCall('one.vm.diskresize', $a, $b, $c);
    }

    /**
     * Attaches a new network interface to the virtual machine
     *
     * @param int $a The object ID.
     * @param string $b A string containing a single NIC vector attribute. Syntax can be the usual attribute=value or XML.
     * @return \One\Resource
     */
    public function vmAttachnic(int $a, string $b) {
        return $this->makeCall('one.vm.attachnic', $a, $b);
    }

    /**
     * Detaches a network interface from a virtual machine
     *
     * @param int $a The object ID.
     * @param int $b The nic ID.
     * @return \One\Resource
     */
    public function vmDetachnic(int $a, int $b) {
        return $this->makeCall('one.vm.detachnic', $a, $b);
    }

    /**
     * Changes the permission bits of a virtual machine.
     *
     * @param int $a The object ID.
     * @param int $b USER USE bit. If set to -1, it will not change.
     * @param int $c USER MANAGE bit. If set to -1, it will not change.
     * @param int $d USER ADMIN bit. If set to -1, it will not change.
     * @param int $e GROUP USE bit. If set to -1, it will not change.
     * @param int $f GROUP MANAGE bit. If set to -1, it will not change.
     * @param int $g GROUP ADMIN bit. If set to -1, it will not change.
     * @param int $h OTHER USE bit. If set to -1, it will not change.
     * @param int $i OTHER MANAGE bit. If set to -1, it will not change.
     * @param int $j OTHER ADMIN bit. If set to -1, it will not change.
     * @return \One\Resource
     */
    public function vmChmod(int $a, int $b, int $c, int $d, int $e, int $f, int $g, int $h, int $i, int $j) {
        return $this->makeCall('one.vm.chmod', $a, $b, $c, $d, $e, $f, $g, $h, $i, $j);
    }

    /**
     * Changes the ownership of a virtual machine.
     *
     * @param int $a The object ID.
     * @param int $b The User ID of the new owner. If set to -1, the owner is not changed.
     * @param int $c The Group ID of the new group. If set to -1, the group is not changed.
     * @return \One\Resource
     */
    public function vmChown(int $a, int $b, int $c) {
        return $this->makeCall('one.vm.chown', $a, $b, $c);
    }

    /**
     * Renames a virtual machine
     *
     * @param int $a The object ID.
     * @param string $b The new name.
     * @return \One\Resource
     */
    public function vmRename(int $a, string $b) {
        return $this->makeCall('one.vm.rename', $a, $b);
    }

    /**
     * Creates a new virtual machine snapshot
     *
     * @param int $a The object ID.
     * @param string $b The new snapshot name. It can be empty.
     * @return \One\Resource
     */
    public function vmSnapshotcreate(int $a, string $b) {
        return $this->makeCall('one.vm.snapshotcreate', $a, $b);
    }

    /**
     * Reverts a virtual machine to a snapshot
     *
     * @param int $a The object ID.
     * @param int $b The snapshot ID.
     * @return \One\Resource
     */
    public function vmSnapshotrevert(int $a, int $b) {
        return $this->makeCall('one.vm.snapshotrevert', $a, $b);
    }

    /**
     * Deletes a virtual machine snapshot
     *
     * @param int $a The object ID.
     * @param int $b The snapshot ID.
     * @return \One\Resource
     */
    public function vmSnapshotdelete(int $a, int $b) {
        return $this->makeCall('one.vm.snapshotdelete', $a, $b);
    }

    /**
     * Changes the capacity of the virtual machine
     *
     * @param int $a The object ID.
     * @param string $b Template containing the new capacity elements CPU, VCPU, MEMORY. If one of them is not present, or its value is 0, it will not be resized.
     * @param bool $c true to enforce the Host capacity is not overcommitted. This parameter is only acknoledged for users in the oneadmin group, Host capacity will be always enforced for regular users.
     * @return \One\Resource
     */
    public function vmResize(int $a, string $b, bool $c) {
        return $this->makeCall('one.vm.resize', $a, $b, $c);
    }

    /**
     * Replaces the <strong>user template</strong> contents.
     *
     * @param int $a The object ID.
     * @param string $b The new user template contents. Syntax can be the usual attribute=value or XML.
     * @param int $c Update type: 0: Replace the whole template. 1: Merge new template with the existing one.
     * @return \One\Resource
     */
    public function vmUpdate(int $a, string $b, int $c) {
        return $this->makeCall('one.vm.update', $a, $b, $c);
    }

    /**
     * Recovers a stuck VM that is waiting for a driver operation. The recovery may be done by failing or succeeding the pending operation. You need to manually check the vm status on the host, to decide if the operation was successful or not.
     *
     * @param int $a The object ID.
     * @param string $b The new template contents. Syntax can be the usual attribute=value or XML.
     * @return \One\Resource
     */
    public function vmUpdateconf(int $a, string $b) {
        return $this->makeCall('one.vm.updateconf', $a, $b);
    }

    /**
     * Retrieves information for the virtual machine.
     *
     * @param int $a The object ID.
     * @param bool $b optional flag to decrypt contained secrets, valid only for admin
     * @return \One\Resource
     */
    public function vmInfo(int $a, bool $b) {
        return $this->makeCall('one.vm.info', $a, $b);
    }

    /**
     * Returns the virtual machine monitoring records.
     *
     * @param int $a The object ID.
     * @return \One\Resource
     */
    public function vmMonitoring(int $a) {
        return $this->makeCall('one.vm.monitoring', $a);
    }

    /**
     * Locks a Virtual Machine. Lock certain actions depending on blocking level.
     *
     * @param int $a The object ID.
     * @param int $b Lock level: use (1), manage (2), admin (3), all (4)
     * @return \One\Resource
     */
    public function vmLock(int $a, int $b) {
        return $this->makeCall('one.vm.lock', $a, $b);
    }

    /**
     * Unlocks a Virtual Machine.
     *
     * @param int $a The object ID.
     * @return \One\Resource
     */
    public function vmUnlock(int $a) {
        return $this->makeCall('one.vm.unlock', $a);
    }

    /**
     * Retrieves information for all or part of the VMs in the pool.
     *
     * @param int $a Filter flag  -4: Resources belonging to the user's primary group  -3: Resources belonging to the user  -2: All resources  -1: Resources belonging to the user and any of his groups * &gt;= 0: UID User's Resources
     * @param int $b When the next parameter is &gt;= -1 this is the Range start ID. Can be -1. For smaller values this is the offset used for pagination.
     * @param int $c For values &gt;= -1 this is the Range end ID. Can be -1 to get until the last ID. For values &lt; -1 this is the page size used for pagination.
     * @param int $d VM state to filter by.
     * @param string $e Filter in KEY=VALUE format.
     * @return \One\Resource
     */
    public function vmpoolInfo(int $a, int $b, int $c, int $d, string $e) {
        return $this->makeCall('one.vmpool.info', $a, $b, $c, $d, $e);
    }

    /**
     * Retrieves information for all or part of the VMs in the pool.
     *
     * @param int $a Filter flag  -4: Resources belonging to the user's primary group  -3: Resources belonging to the user  -2: All resources  -1: Resources belonging to the user and any of his groups * &gt;= 0: UID User's Resources
     * @param int $b When the next parameter is &gt;= -1 this is the Range start ID. Can be -1. For smaller values this is the offset used for pagination.
     * @param int $c For values &gt;= -1 this is the Range end ID. Can be -1 to get until the last ID. For values &lt; -1 this is the page size used for pagination.
     * @param int $d VM state to filter by.
     * @param string $e Filter in KEY=VALUE format.
     * @return \One\Resource
     */
    public function vmpoolInfoextended(int $a, int $b, int $c, int $d, string $e) {
        return $this->makeCall('one.vmpool.infoextended', $a, $b, $c, $d, $e);
    }

    /**
     * Returns all the virtual machine monitoring records.
     *
     * @param int $a Filter flag  -4: Resources belonging to the user's primary group  -3: Resources belonging to the user  -2: All resources  -1: Resources belonging to the user and any of his groups * &gt;= 0: UID User's Resources
     * @param int $b Retrieve monitor records in the last num seconds. 0 just the last record, -1 all records.
     * @return \One\Resource
     */
    public function vmpoolMonitoring(int $a, int $b) {
        return $this->makeCall('one.vmpool.monitoring', $a, $b);
    }

    /**
     * Returns the virtual machine history records.
     *
     * @param int $a Filter flag  -4: Resources belonging to the user's primary group  -3: Resources belonging to the user  -2: All resources  -1: Resources belonging to the user and any of his groups * &gt;= 0: UID User's Resources
     * @param int $b Start time for the time interval. Can be -1, in which case the time interval won't have a left boundary.
     * @param int $c End time for the time interval. Can be -1, in which case the time interval won't have a right boundary.
     * @return \One\Resource
     */
    public function vmpoolAccounting(int $a, int $b, int $c) {
        return $this->makeCall('one.vmpool.accounting', $a, $b, $c);
    }

    /**
     * Returns the virtual machine showback records
     *
     * @param int $a Filter flag - &lt; = -3: Connected user's resources - -2: All resources - -1: Connected user's and his group's resources - &gt; = 0: UID User's Resources
     * @param int $b First month for the time interval. January is 1. Can be -1, in which case the time interval won't have a left boundary.
     * @param int $c First year for the time interval. Can be -1, in which case the time interval won't have a left boundary.
     * @param int $d Last month for the time interval. January is 1. Can be -1, in which case the time interval won't have a right boundary.
     * @param int $e Last year for the time interval. Can be -1, in which case the time interval won't have a right boundary.
     * @return \One\Resource
     */
    public function vmpoolShowback(int $a, int $b, int $c, int $d, int $e) {
        return $this->makeCall('one.vmpool.showback', $a, $b, $c, $d, $e);
    }

    /**
     * Processes all the history records, and stores the monthly cost for each VM
     *
     * @param int $a First month for the time interval. January is 1. Can be -1, in which case the time interval won't have a left boundary.
     * @param int $b First year for the time interval. Can be -1, in which case the time interval won't have a left boundary.
     * @param int $c Last month for the time interval. January is 1. Can be -1, in which case the time interval won't have a right boundary.
     * @param int $d Last year for the time interval. Can be -1, in which case the time interval won't have a right boundary.
     * @return \One\Resource
     */
    public function vmpoolCalculateshowback(int $a, int $b, int $c, int $d) {
        return $this->makeCall('one.vmpool.calculateshowback', $a, $b, $c, $d);
    }

    /**
     * Allocates a new host in OpenNebula
     *
     * @param string $a Hostname of the machine we want to add
     * @param string $b The name of the information manager (im\_mad\_name), this values are taken from the oned.conf with the tag name IM\_MAD (name)
     * @param string $c The name of the virtual machine manager mad name (vmm\_mad\_name), this values are taken from the oned.conf with the tag name VM\_MAD (name)
     * @param int $d The cluster ID. If it is -1, the default one will be used.
     * @return \One\Resource
     */
    public function hostAllocate(string $a, string $b, string $c, int $d) {
        return $this->makeCall('one.host.allocate', $a, $b, $c, $d);
    }

    /**
     * Deletes the given host from the pool
     *
     * @param int $a The object ID.
     * @return \One\Resource
     */
    public function hostDelete(int $a) {
        return $this->makeCall('one.host.delete', $a);
    }

    /**
     * Sets the status of the host
     *
     * @param int $a The Host ID.
     * @param int $b 0: ENABLED 1: DISABLED 2: OFFLINE
     * @return \One\Resource
     */
    public function hostStatus(int $a, int $b) {
        return $this->makeCall('one.host.status', $a, $b);
    }

    /**
     * Replaces the host's template contents.
     *
     * @param int $a The object ID.
     * @param string $b The new template contents. Syntax can be the usual attribute=value or XML.
     * @param int $c Update type: 0: Replace the whole template. 1: Merge new template with the existing one.
     * @return \One\Resource
     */
    public function hostUpdate(int $a, string $b, int $c) {
        return $this->makeCall('one.host.update', $a, $b, $c);
    }

    /**
     * Renames a host.
     *
     * @param int $a The object ID.
     * @param string $b The new name.
     * @return \One\Resource
     */
    public function hostRename(int $a, string $b) {
        return $this->makeCall('one.host.rename', $a, $b);
    }

    /**
     * Retrieves information for the host.
     *
     * @param int $a The object ID.
     * @param bool $b optional flag to decrypt contained secrets, valid only for admin
     * @return \One\Resource
     */
    public function hostInfo(int $a, bool $b) {
        return $this->makeCall('one.host.info', $a, $b);
    }

    /**
     * Returns the host monitoring records.
     *
     * @param int $a The object ID.
     * @return \One\Resource
     */
    public function hostMonitoring(int $a) {
        return $this->makeCall('one.host.monitoring', $a);
    }

    /**
     * Retrieves information for all the hosts in the pool.
     *

     * @return \One\Resource
     */
    public function hostpoolInfo() {
        return $this->makeCall('one.hostpool.info', );
    }

    /**
     * Returns all the host monitoring records.
     *
     * @param int $a Retrieve monitor records in the last num seconds. 0 just the last record, -1 all records.
     * @return \One\Resource
     */
    public function hostpoolMonitoring(int $a) {
        return $this->makeCall('one.hostpool.monitoring', $a);
    }

    /**
     * Allocates a new cluster in OpenNebula.
     *
     * @param string $a Name for the new cluster.
     * @return \One\Resource
     */
    public function clusterAllocate(string $a) {
        return $this->makeCall('one.cluster.allocate', $a);
    }

    /**
     * Deletes the given cluster from the pool.
     *
     * @param int $a The object ID.
     * @return \One\Resource
     */
    public function clusterDelete(int $a) {
        return $this->makeCall('one.cluster.delete', $a);
    }

    /**
     * Replaces the cluster template contents.
     *
     * @param int $a The object ID.
     * @param string $b The new template contents. Syntax can be the usual attribute=value or XML.
     * @param int $c Update type: 0: Replace the whole template. 1: Merge new template with the existing one.
     * @return \One\Resource
     */
    public function clusterUpdate(int $a, string $b, int $c) {
        return $this->makeCall('one.cluster.update', $a, $b, $c);
    }

    /**
     * Adds a host to the given cluster.
     *
     * @param int $a The cluster ID.
     * @param int $b The host ID.
     * @return \One\Resource
     */
    public function clusterAddhost(int $a, int $b) {
        return $this->makeCall('one.cluster.addhost', $a, $b);
    }

    /**
     * Removes a host from the given cluster.
     *
     * @param int $a The cluster ID.
     * @param int $b The host ID.
     * @return \One\Resource
     */
    public function clusterDelhost(int $a, int $b) {
        return $this->makeCall('one.cluster.delhost', $a, $b);
    }

    /**
     * Adds a datastore to the given cluster.
     *
     * @param int $a The cluster ID.
     * @param int $b The datastore ID.
     * @return \One\Resource
     */
    public function clusterAdddatastore(int $a, int $b) {
        return $this->makeCall('one.cluster.adddatastore', $a, $b);
    }

    /**
     * Removes a datastore from the given cluster.
     *
     * @param int $a The cluster ID.
     * @param int $b The datastore ID.
     * @return \One\Resource
     */
    public function clusterDeldatastore(int $a, int $b) {
        return $this->makeCall('one.cluster.deldatastore', $a, $b);
    }

    /**
     * Adds a vnet to the given cluster.
     *
     * @param int $a The cluster ID.
     * @param int $b The vnet ID.
     * @return \One\Resource
     */
    public function clusterAddvnet(int $a, int $b) {
        return $this->makeCall('one.cluster.addvnet', $a, $b);
    }

    /**
     * Removes a vnet from the given cluster.
     *
     * @param int $a The cluster ID.
     * @param int $b The vnet ID.
     * @return \One\Resource
     */
    public function clusterDelvnet(int $a, int $b) {
        return $this->makeCall('one.cluster.delvnet', $a, $b);
    }

    /**
     * Renames a cluster.
     *
     * @param int $a The object ID.
     * @param string $b The new name.
     * @return \One\Resource
     */
    public function clusterRename(int $a, string $b) {
        return $this->makeCall('one.cluster.rename', $a, $b);
    }

    /**
     * Retrieves information for the cluster.
     *
     * @param int $a The object ID.
     * @param bool $b optional flag to decrypt contained secrets, valid only for admin
     * @return \One\Resource
     */
    public function clusterInfo(int $a, bool $b) {
        return $this->makeCall('one.cluster.info', $a, $b);
    }

    /**
     * Retrieves information for all the clusters in the pool.
     *

     * @return \One\Resource
     */
    public function clusterpoolInfo() {
        return $this->makeCall('one.clusterpool.info', );
    }

    /**
     * Allocates a new virtual network in OpenNebula.
     *
     * @param string $a A string containing the template of the virtual network. Syntax can be the usual attribute=value or XML.
     * @param int $b The cluster ID. If it is -1, the default one will be used.
     * @return \One\Resource
     */
    public function vnAllocate(string $a, int $b) {
        return $this->makeCall('one.vn.allocate', $a, $b);
    }

    /**
     * Deletes the given virtual network from the pool.
     *
     * @param int $a The object ID.
     * @return \One\Resource
     */
    public function vnDelete(int $a) {
        return $this->makeCall('one.vn.delete', $a);
    }

    /**
     * Adds address ranges to a virtual network.
     *
     * @param int $a The object ID.
     * @param string $b template of the address ranges to add. Syntax can be the usual attribute=value or XML, see below.
     * @return \One\Resource
     */
    public function vnAdd_ar(int $a, string $b) {
        return $this->makeCall('one.vn.add_ar', $a, $b);
    }

    /**
     * Removes an address range from a virtual network.
     *
     * @param int $a The object ID.
     * @param int $b ID of the address range to remove.
     * @param bool $c Optional force flag, bypass consistency checks
     * @return \One\Resource
     */
    public function vnRm_ar(int $a, int $b, bool $c) {
        return $this->makeCall('one.vn.rm_ar', $a, $b, $c);
    }

    /**
     * Updates the attributes of an address range.
     *
     * @param int $a The object ID.
     * @param string $b template of the address ranges to update. Syntax can be the usual attribute=value or XML, see below.
     * @return \One\Resource
     */
    public function vnUpdate_ar(int $a, string $b) {
        return $this->makeCall('one.vn.update_ar', $a, $b);
    }

    /**
     * Reserve network addresses.
     *
     * @param int $a The virtual network to reserve from.
     * @param string $b Template, see below.
     * @return \One\Resource
     */
    public function vnReserve(int $a, string $b) {
        return $this->makeCall('one.vn.reserve', $a, $b);
    }

    /**
     * Frees a reserved address range from a virtual network.
     *
     * @param int $a The object ID.
     * @param int $b ID of the address range to free.
     * @return \One\Resource
     */
    public function vnFree_ar(int $a, int $b) {
        return $this->makeCall('one.vn.free_ar', $a, $b);
    }

    /**
     * Holds a virtual network Lease as used.
     *
     * @param int $a The object ID.
     * @param string $b template of the lease to hold, e.g. LEASES=[IP=192.168.0.5].
     * @return \One\Resource
     */
    public function vnHold(int $a, string $b) {
        return $this->makeCall('one.vn.hold', $a, $b);
    }

    /**
     * Releases a virtual network Lease on hold.
     *
     * @param int $a The object ID.
     * @param string $b template of the lease to release, e.g. LEASES=[IP=192.168.0.5].
     * @return \One\Resource
     */
    public function vnRelease(int $a, string $b) {
        return $this->makeCall('one.vn.release', $a, $b);
    }

    /**
     * Replaces the virtual network template contents.
     *
     * @param int $a The object ID.
     * @param string $b The new template contents. Syntax can be the usual attribute=value or XML.
     * @param int $c Update type: 0: Replace the whole template. 1: Merge new template with the existing one.
     * @return \One\Resource
     */
    public function vnUpdate(int $a, string $b, int $c) {
        return $this->makeCall('one.vn.update', $a, $b, $c);
    }

    /**
     * Changes the permission bits of a virtual network.
     *
     * @param int $a The object ID.
     * @param int $b USER USE bit. If set to -1, it will not change.
     * @param int $c USER MANAGE bit. If set to -1, it will not change.
     * @param int $d USER ADMIN bit. If set to -1, it will not change.
     * @param int $e GROUP USE bit. If set to -1, it will not change.
     * @param int $f GROUP MANAGE bit. If set to -1, it will not change.
     * @param int $g GROUP ADMIN bit. If set to -1, it will not change.
     * @param int $h OTHER USE bit. If set to -1, it will not change.
     * @param int $i OTHER MANAGE bit. If set to -1, it will not change.
     * @param int $j OTHER ADMIN bit. If set to -1, it will not change.
     * @return \One\Resource
     */
    public function vnChmod(int $a, int $b, int $c, int $d, int $e, int $f, int $g, int $h, int $i, int $j) {
        return $this->makeCall('one.vn.chmod', $a, $b, $c, $d, $e, $f, $g, $h, $i, $j);
    }

    /**
     * Changes the ownership of a virtual network.
     *
     * @param int $a The object ID.
     * @param int $b The User ID of the new owner. If set to -1, the owner is not changed.
     * @param int $c The Group ID of the new group. If set to -1, the group is not changed.
     * @return \One\Resource
     */
    public function vnChown(int $a, int $b, int $c) {
        return $this->makeCall('one.vn.chown', $a, $b, $c);
    }

    /**
     * Renames a virtual network.
     *
     * @param int $a The object ID.
     * @param string $b The new name.
     * @return \One\Resource
     */
    public function vnRename(int $a, string $b) {
        return $this->makeCall('one.vn.rename', $a, $b);
    }

    /**
     * Locks a Virtual Network. Lock certain actions depending on blocking level.
     *
     * @param int $a The object ID.
     * @param bool $b optional flag to decrypt contained secrets, valid only for admin
     * @return \One\Resource
     */
    public function vnInfo(int $a, bool $b) {
        return $this->makeCall('one.vn.info', $a, $b);
    }

    /**
     * Unlocks a Virtual Network.
     *
     * @param int $a The object ID.
     * @return \One\Resource
     */
    public function vnUnlock(int $a) {
        return $this->makeCall('one.vn.unlock', $a);
    }

    /**
     * Retrieves information for all or part of the virtual networks in the pool.
     *
     * @param int $a Filter flag  -4: Resources belonging to the user's primary group  -3: Resources belonging to the user  -2: All resources  -1: Resources belonging to the user and any of his groups * &gt;= 0: UID User's Resources
     * @param int $b When the next parameter is &gt;= -1 this is the Range start ID. Can be -1. For smaller values this is the offset used for pagination.
     * @param int $c For values &gt;= -1 this is the Range end ID. Can be -1 to get until the last ID. For values &lt; -1 this is the page size used for pagination.
     * @return \One\Resource
     */
    public function vnpoolInfo(int $a, int $b, int $c) {
        return $this->makeCall('one.vnpool.info', $a, $b, $c);
    }

    /**
     * Allocates a new security group in OpenNebula.
     *
     * @param string $a A string containing the template of the security group. Syntax can be the usual attribute=value or XML.
     * @return \One\Resource
     */
    public function secgroupAllocate(string $a) {
        return $this->makeCall('one.secgroup.allocate', $a);
    }

    /**
     * Clones an existing security group.
     *
     * @param int $a The ID of the security group to be cloned.
     * @param string $b Name for the new security group.
     * @return \One\Resource
     */
    public function secgroupClone(int $a, string $b) {
        return $this->makeCall('one.secgroup.clone', $a, $b);
    }

    /**
     * Deletes the given security group from the pool.
     *
     * @param int $a The object ID.
     * @return \One\Resource
     */
    public function secgroupDelete(int $a) {
        return $this->makeCall('one.secgroup.delete', $a);
    }

    /**
     * Replaces the security group template contents.
     *
     * @param int $a The object ID.
     * @param string $b The new template contents. Syntax can be the usual attribute=value or XML.
     * @param int $c Update type: 0: Replace the whole template. 1: Merge new template with the existing one.
     * @return \One\Resource
     */
    public function secgroupUpdate(int $a, string $b, int $c) {
        return $this->makeCall('one.secgroup.update', $a, $b, $c);
    }

    /**
     * Commit security group changes to associated VMs. This is intended for retrying updates of VMs or reinitialize the updating process if oned stopped or failed after a one.secgroup.update call.
     *
     * @param int $a The object ID.
     * @param bool $b I true the action will only operate on outdated and error VMs. False to update all VMs.
     * @return \One\Resource
     */
    public function secgroupCommit(int $a, bool $b) {
        return $this->makeCall('one.secgroup.commit', $a, $b);
    }

    /**
     * Changes the permission bits of a security group.
     *
     * @param int $a The object ID.
     * @param int $b USER USE bit. If set to -1, it will not change.
     * @param int $c USER MANAGE bit. If set to -1, it will not change.
     * @param int $d USER ADMIN bit. If set to -1, it will not change.
     * @param int $e GROUP USE bit. If set to -1, it will not change.
     * @param int $f GROUP MANAGE bit. If set to -1, it will not change.
     * @param int $g GROUP ADMIN bit. If set to -1, it will not change.
     * @param int $h OTHER USE bit. If set to -1, it will not change.
     * @param int $i OTHER MANAGE bit. If set to -1, it will not change.
     * @param int $j OTHER ADMIN bit. If set to -1, it will not change.
     * @return \One\Resource
     */
    public function secgroupChmod(int $a, int $b, int $c, int $d, int $e, int $f, int $g, int $h, int $i, int $j) {
        return $this->makeCall('one.secgroup.chmod', $a, $b, $c, $d, $e, $f, $g, $h, $i, $j);
    }

    /**
     * Changes the ownership of a security group.
     *
     * @param int $a The object ID.
     * @param int $b The User ID of the new owner. If set to -1, the owner is not changed.
     * @param int $c The Group ID of the new group. If set to -1, the group is not changed.
     * @return \One\Resource
     */
    public function secgroupChown(int $a, int $b, int $c) {
        return $this->makeCall('one.secgroup.chown', $a, $b, $c);
    }

    /**
     * Renames a security group.
     *
     * @param int $a The object ID.
     * @param string $b The new name.
     * @return \One\Resource
     */
    public function secgroupRename(int $a, string $b) {
        return $this->makeCall('one.secgroup.rename', $a, $b);
    }

    /**
     * Retrieves information for the security group.
     *
     * @param int $a The object ID.
     * @param bool $b optional flag to decrypt contained secrets, valid only for admin
     * @return \One\Resource
     */
    public function secgroupInfo(int $a, bool $b) {
        return $this->makeCall('one.secgroup.info', $a, $b);
    }

    /**
     * Retrieves information for all or part of the security groups in the pool.
     *
     * @param int $a Filter flag  -4: Resources belonging to the user's primary group  -3: Resources belonging to the user  -2: All resources  -1: Resources belonging to the user and any of his groups * &gt;= 0: UID User's Resources
     * @param int $b When the next parameter is &gt;= -1 this is the Range start ID. Can be -1. For smaller values this is the offset used for pagination.
     * @param int $c For values &gt;= -1 this is the Range end ID. Can be -1 to get until the last ID. For values &lt; -1 this is the page size used for pagination.
     * @return \One\Resource
     */
    public function secgrouppoolInfo(int $a, int $b, int $c) {
        return $this->makeCall('one.secgrouppool.info', $a, $b, $c);
    }

    /**
     * Allocates a new VM group in OpenNebula.
     *
     * @param string $a A string containing the template of the VM. Syntax can be the usual attribute=value or XML.
     * @return \One\Resource
     */
    public function vmgroupAllocate(string $a) {
        return $this->makeCall('one.vmgroup.allocate', $a);
    }

    /**
     * Deletes the given VM group from the pool.
     *
     * @param int $a The object ID.
     * @return \One\Resource
     */
    public function vmgroupDelete(int $a) {
        return $this->makeCall('one.vmgroup.delete', $a);
    }

    /**
     * Replaces the VM group template contents.
     *
     * @param int $a The object ID.
     * @param string $b The new template contents. Syntax can be the usual attribute=value or XML.
     * @param int $c Update type: 0: Replace the whole template. 1: Merge new template with the existing one.
     * @return \One\Resource
     */
    public function vmgroupUpdate(int $a, string $b, int $c) {
        return $this->makeCall('one.vmgroup.update', $a, $b, $c);
    }

    /**
     * Changes the permission bits of a VM group.
     *
     * @param int $a The object ID.
     * @param int $b USER USE bit. If set to -1, it will not change.
     * @param int $c USER MANAGE bit. If set to -1, it will not change.
     * @param int $d USER ADMIN bit. If set to -1, it will not change.
     * @param int $e GROUP USE bit. If set to -1, it will not change.
     * @param int $f GROUP MANAGE bit. If set to -1, it will not change.
     * @param int $g GROUP ADMIN bit. If set to -1, it will not change.
     * @param int $h OTHER USE bit. If set to -1, it will not change.
     * @param int $i OTHER MANAGE bit. If set to -1, it will not change.
     * @param int $j OTHER ADMIN bit. If set to -1, it will not change.
     * @return \One\Resource
     */
    public function vmgroupChmod(int $a, int $b, int $c, int $d, int $e, int $f, int $g, int $h, int $i, int $j) {
        return $this->makeCall('one.vmgroup.chmod', $a, $b, $c, $d, $e, $f, $g, $h, $i, $j);
    }

    /**
     * Changes the ownership of a VM group.
     *
     * @param int $a The object ID.
     * @param int $b The User ID of the new owner. If set to -1, the owner is not changed.
     * @param int $c The Group ID of the new group. If set to -1, the group is not changed.
     * @return \One\Resource
     */
    public function vmgroupChown(int $a, int $b, int $c) {
        return $this->makeCall('one.vmgroup.chown', $a, $b, $c);
    }

    /**
     * Renames a VM group.
     *
     * @param int $a The object ID.
     * @param string $b The new name.
     * @return \One\Resource
     */
    public function vmgroupRename(int $a, string $b) {
        return $this->makeCall('one.vmgroup.rename', $a, $b);
    }

    /**
     * Retrieves information for the VM group.
     *
     * @param int $a The object ID.
     * @param bool $b optional flag to decrypt contained secrets, valid only for admin
     * @return \One\Resource
     */
    public function vmgroupInfo(int $a, bool $b) {
        return $this->makeCall('one.vmgroup.info', $a, $b);
    }

    /**
     * Locks a Virtual Machine Group. Lock certain actions depending on blocking level.
     *
     * @param int $a The object ID.
     * @param int $b Lock level: use (1), manage (2), admin (3), all (4)
     * @return \One\Resource
     */
    public function vmgroupLock(int $a, int $b) {
        return $this->makeCall('one.vmgroup.lock', $a, $b);
    }

    /**
     * Unlocks a Virtual Machine Group.
     *
     * @param int $a The object ID.
     * @return \One\Resource
     */
    public function vmgroupUnlock(int $a) {
        return $this->makeCall('one.vmgroup.unlock', $a);
    }

    /**
     * Retrieves information for all or part of the VM groups in the pool.
     *
     * @param int $a Filter flag  -4: Resources belonging to the user's primary group  -3: Resources belonging to the user  -2: All resources  -1: Resources belonging to the user and any of his groups * &gt;= 0: UID User's Resources
     * @param int $b When the next parameter is &gt;= -1 this is the Range start ID. Can be -1. For smaller values this is the offset used for pagination.
     * @param int $c For values &gt;= -1 this is the Range end ID. Can be -1 to get until the last ID. For values &lt; -1 this is the page size used for pagination.
     * @return \One\Resource
     */
    public function vmgrouppoolInfo(int $a, int $b, int $c) {
        return $this->makeCall('one.vmgrouppool.info', $a, $b, $c);
    }

    /**
     * Allocates a new datastore in OpenNebula.
     *
     * @param string $a A string containing the template of the datastore. Syntax can be the usual attribute=value or XML.
     * @param int $b The cluster ID. If it is -1, the default one will be used.
     * @return \One\Resource
     */
    public function datastoreAllocate(string $a, int $b) {
        return $this->makeCall('one.datastore.allocate', $a, $b);
    }

    /**
     * Deletes the given datastore from the pool.
     *
     * @param int $a The object ID.
     * @return \One\Resource
     */
    public function datastoreDelete(int $a) {
        return $this->makeCall('one.datastore.delete', $a);
    }

    /**
     * Replaces the datastore template contents.
     *
     * @param int $a The object ID.
     * @param string $b The new template contents. Syntax can be the usual attribute=value or XML.
     * @param int $c Update type: 0: Replace the whole template. 1: Merge new template with the existing one.
     * @return \One\Resource
     */
    public function datastoreUpdate(int $a, string $b, int $c) {
        return $this->makeCall('one.datastore.update', $a, $b, $c);
    }

    /**
     * Changes the permission bits of a datastore.
     *
     * @param int $a The object ID.
     * @param int $b USER USE bit. If set to -1, it will not change.
     * @param int $c USER MANAGE bit. If set to -1, it will not change.
     * @param int $d USER ADMIN bit. If set to -1, it will not change.
     * @param int $e GROUP USE bit. If set to -1, it will not change.
     * @param int $f GROUP MANAGE bit. If set to -1, it will not change.
     * @param int $g GROUP ADMIN bit. If set to -1, it will not change.
     * @param int $h OTHER USE bit. If set to -1, it will not change.
     * @param int $i OTHER MANAGE bit. If set to -1, it will not change.
     * @param int $j OTHER ADMIN bit. If set to -1, it will not change.
     * @return \One\Resource
     */
    public function datastoreChmod(int $a, int $b, int $c, int $d, int $e, int $f, int $g, int $h, int $i, int $j) {
        return $this->makeCall('one.datastore.chmod', $a, $b, $c, $d, $e, $f, $g, $h, $i, $j);
    }

    /**
     * Changes the ownership of a datastore.
     *
     * @param int $a The object ID.
     * @param int $b The User ID of the new owner. If set to -1, the owner is not changed.
     * @param int $c The Group ID of the new group. If set to -1, the group is not changed.
     * @return \One\Resource
     */
    public function datastoreChown(int $a, int $b, int $c) {
        return $this->makeCall('one.datastore.chown', $a, $b, $c);
    }

    /**
     * Renames a datastore.
     *
     * @param int $a The object ID.
     * @param string $b The new name.
     * @return \One\Resource
     */
    public function datastoreRename(int $a, string $b) {
        return $this->makeCall('one.datastore.rename', $a, $b);
    }

    /**
     * Enables or disables a datastore.
     *
     * @param int $a The object ID.
     * @param bool $b True for enabling, false for disabling.
     * @return \One\Resource
     */
    public function datastoreEnable(int $a, bool $b) {
        return $this->makeCall('one.datastore.enable', $a, $b);
    }

    /**
     * Retrieves information for the datastore.
     *
     * @param int $a The object ID.
     * @param bool $b optional flag to decrypt contained secrets, valid only for admin
     * @return \One\Resource
     */
    public function datastoreInfo(int $a, bool $b) {
        return $this->makeCall('one.datastore.info', $a, $b);
    }

    /**
     * Retrieves information for all or part of the datastores in the pool.
     *

     * @return \One\Resource
     */
    public function datastorepoolInfo() {
        return $this->makeCall('one.datastorepool.info', );
    }

    /**
     * Allocates a new image in OpenNebula.
     *
     * @param string $a A string containing the template of the image. Syntax can be the usual attribute=value or XML.
     * @param int $b The datastore ID.
     * @param bool $c true to avoid checking datastore capacity. Only for admins.
     * @return \One\Resource
     */
    public function imageAllocate(string $a, int $b, bool $c) {
        return $this->makeCall('one.image.allocate', $a, $b, $c);
    }

    /**
     * Clones an existing image.
     *
     * @param int $a The ID of the image to be cloned.
     * @param string $b Name for the new image.
     * @param int $c The ID of the target datastore. Optional, can be set to -1 to use the current one.
     * @return \One\Resource
     */
    public function imageClone(int $a, string $b, int $c) {
        return $this->makeCall('one.image.clone', $a, $b, $c);
    }

    /**
     * Deletes the given image from the pool.
     *
     * @param int $a The object ID.
     * @return \One\Resource
     */
    public function imageDelete(int $a) {
        return $this->makeCall('one.image.delete', $a);
    }

    /**
     * Enables or disables an image.
     *
     * @param int $a The Image ID.
     * @param bool $b True for enabling, false for disabling.
     * @return \One\Resource
     */
    public function imageEnable(int $a, bool $b) {
        return $this->makeCall('one.image.enable', $a, $b);
    }

    /**
     * Sets the Image as persistent or not persistent.
     *
     * @param int $a The Image ID.
     * @param bool $b True for persistent, false for non-persisent.
     * @return \One\Resource
     */
    public function imagePersistent(int $a, bool $b) {
        return $this->makeCall('one.image.persistent', $a, $b);
    }

    /**
     * Changes the type of an Image.
     *
     * @param int $a The Image ID.
     * @param string $b New type for the Image. See the existing types in the Image template reference.
     * @return \One\Resource
     */
    public function imageChtype(int $a, string $b) {
        return $this->makeCall('one.image.chtype', $a, $b);
    }

    /**
     * Replaces the image template contents.
     *
     * @param int $a The object ID.
     * @param string $b The new template contents. Syntax can be the usual attribute=value or XML.
     * @param int $c Update type: 0: Replace the whole template. 1: Merge new template with the existing one.
     * @return \One\Resource
     */
    public function imageUpdate(int $a, string $b, int $c) {
        return $this->makeCall('one.image.update', $a, $b, $c);
    }

    /**
     * Changes the permission bits of an image.
     *
     * @param int $a The object ID.
     * @param int $b USER USE bit. If set to -1, it will not change.
     * @param int $c USER MANAGE bit. If set to -1, it will not change.
     * @param int $d USER ADMIN bit. If set to -1, it will not change.
     * @param int $e GROUP USE bit. If set to -1, it will not change.
     * @param int $f GROUP MANAGE bit. If set to -1, it will not change.
     * @param int $g GROUP ADMIN bit. If set to -1, it will not change.
     * @param int $h OTHER USE bit. If set to -1, it will not change.
     * @param int $i OTHER MANAGE bit. If set to -1, it will not change.
     * @param int $j OTHER ADMIN bit. If set to -1, it will not change.
     * @return \One\Resource
     */
    public function imageChmod(int $a, int $b, int $c, int $d, int $e, int $f, int $g, int $h, int $i, int $j) {
        return $this->makeCall('one.image.chmod', $a, $b, $c, $d, $e, $f, $g, $h, $i, $j);
    }

    /**
     * Changes the ownership of an image.
     *
     * @param int $a The object ID.
     * @param int $b The User ID of the new owner. If set to -1, the owner is not changed.
     * @param int $c The Group ID of the new group. If set to -1, the group is not changed.
     * @return \One\Resource
     */
    public function imageChown(int $a, int $b, int $c) {
        return $this->makeCall('one.image.chown', $a, $b, $c);
    }

    /**
     * Renames an image.
     *
     * @param int $a The object ID.
     * @param string $b The new name.
     * @return \One\Resource
     */
    public function imageRename(int $a, string $b) {
        return $this->makeCall('one.image.rename', $a, $b);
    }

    /**
     * Deletes a snapshot from the image
     *
     * @param int $a The object ID.
     * @param int $b ID of the snapshot to delete
     * @return \One\Resource
     */
    public function imageSnapshotdelete(int $a, int $b) {
        return $this->makeCall('one.image.snapshotdelete', $a, $b);
    }

    /**
     * Reverts image state to a previous snapshot
     *
     * @param int $a The object ID.
     * @param int $b ID of the snapshot to revert to
     * @return \One\Resource
     */
    public function imageSnapshotrevert(int $a, int $b) {
        return $this->makeCall('one.image.snapshotrevert', $a, $b);
    }

    /**
     * Flatten the snapshot of image and discards others
     *
     * @param int $a The object ID.
     * @param int $b ID of the snapshot to flatten
     * @return \One\Resource
     */
    public function imageSnapshotflatten(int $a, int $b) {
        return $this->makeCall('one.image.snapshotflatten', $a, $b);
    }

    /**
     * Retrieves information for the image.
     *
     * @param int $a The object ID.
     * @param bool $b optional flag to decrypt contained secrets, valid only for admin
     * @return \One\Resource
     */
    public function imageInfo(int $a, bool $b) {
        return $this->makeCall('one.image.info', $a, $b);
    }

    /**
     * Locks an Image. Lock certain actions depending on blocking level
     *
     * @param int $a The object ID.
     * @param int $b Lock level: use (1), manage (2), admin (3), all (4)
     * @return \One\Resource
     */
    public function imageLock(int $a, int $b) {
        return $this->makeCall('one.image.lock', $a, $b);
    }

    /**
     * Unlocks an Image.
     *
     * @param int $a The object ID.
     * @return \One\Resource
     */
    public function imageUnlock(int $a) {
        return $this->makeCall('one.image.unlock', $a);
    }

    /**
     * Retrieves information for all or part of the images in the pool.
     *
     * @param int $a Filter flag  -4: Resources belonging to the user's primary group  -3: Resources belonging to the user  -2: All resources  -1: Resources belonging to the user and any of his groups * &gt;= 0: UID User's Resources
     * @param int $b When the next parameter is &gt;= -1 this is the Range start ID. Can be -1. For smaller values this is the offset used for pagination.
     * @param int $c For values &gt;= -1 this is the Range end ID. Can be -1 to get until the last ID. For values &lt; -1 this is the page size used for pagination.
     * @return \One\Resource
     */
    public function imagepoolInfo(int $a, int $b, int $c) {
        return $this->makeCall('one.imagepool.info', $a, $b, $c);
    }

    /**
     * Allocates a new marketplace in OpenNebula.
     *
     * @param string $a A string containing the template of the marketplace. Syntax can be the usual attribute=value or XML.
     * @return \One\Resource
     */
    public function marketAllocate(string $a) {
        return $this->makeCall('one.market.allocate', $a);
    }

    /**
     * Deletes the given marketplace from the pool.
     *
     * @param int $a The object ID.
     * @return \One\Resource
     */
    public function marketDelete(int $a) {
        return $this->makeCall('one.market.delete', $a);
    }

    /**
     * Replaces the marketplace template contents.
     *
     * @param int $a The object ID.
     * @param string $b The new template contents. Syntax can be the usual attribute=value or XML.
     * @param int $c Update type: 0: Replace the whole template. 1: Merge new template with the existing one.
     * @return \One\Resource
     */
    public function marketUpdate(int $a, string $b, int $c) {
        return $this->makeCall('one.market.update', $a, $b, $c);
    }

    /**
     * Changes the permission bits of a marketplace.
     *
     * @param int $a The object ID.
     * @param int $b USER USE bit. If set to -1, it will not change.
     * @param int $c USER MANAGE bit. If set to -1, it will not change.
     * @param int $d USER ADMIN bit. If set to -1, it will not change.
     * @param int $e GROUP USE bit. If set to -1, it will not change.
     * @param int $f GROUP MANAGE bit. If set to -1, it will not change.
     * @param int $g GROUP ADMIN bit. If set to -1, it will not change.
     * @param int $h OTHER USE bit. If set to -1, it will not change.
     * @param int $i OTHER MANAGE bit. If set to -1, it will not change.
     * @param int $j OTHER ADMIN bit. If set to -1, it will not change.
     * @return \One\Resource
     */
    public function marketChmod(int $a, int $b, int $c, int $d, int $e, int $f, int $g, int $h, int $i, int $j) {
        return $this->makeCall('one.market.chmod', $a, $b, $c, $d, $e, $f, $g, $h, $i, $j);
    }

    /**
     * Changes the ownership of a marketplace.
     *
     * @param int $a The object ID.
     * @param int $b The User ID of the new owner. If set to -1, the owner is not changed.
     * @param int $c The Group ID of the new group. If set to -1, the group is not changed.
     * @return \One\Resource
     */
    public function marketChown(int $a, int $b, int $c) {
        return $this->makeCall('one.market.chown', $a, $b, $c);
    }

    /**
     * Renames a marketplace.
     *
     * @param int $a The object ID.
     * @param string $b The new name.
     * @return \One\Resource
     */
    public function marketRename(int $a, string $b) {
        return $this->makeCall('one.market.rename', $a, $b);
    }

    /**
     * Retrieves information for the marketplace.
     *
     * @param int $a The object ID.
     * @param bool $b optional flag to decrypt contained secrets, valid only for admin
     * @return \One\Resource
     */
    public function marketInfo(int $a, bool $b) {
        return $this->makeCall('one.market.info', $a, $b);
    }

    /**
     * Retrieves information for all or part of the marketplaces in the pool.
     *

     * @return \One\Resource
     */
    public function marketpoolInfo() {
        return $this->makeCall('one.marketpool.info', );
    }

    /**
     * Allocates a new marketplace app in OpenNebula.
     *
     * @param string $a A string containing the template of the marketplace app. Syntax can be the usual attribute=value or XML.
     * @param int $b The Marketplace ID.
     * @return \One\Resource
     */
    public function marketappAllocate(string $a, int $b) {
        return $this->makeCall('one.marketapp.allocate', $a, $b);
    }

    /**
     * Deletes the given marketplace app from the pool.
     *
     * @param int $a The object ID.
     * @return \One\Resource
     */
    public function marketappDelete(int $a) {
        return $this->makeCall('one.marketapp.delete', $a);
    }

    /**
     * Enables or disables a marketplace app.
     *
     * @param int $a The marketplace app ID.
     * @param bool $b True for enabling, false for disabling.
     * @return \One\Resource
     */
    public function marketappEnable(int $a, bool $b) {
        return $this->makeCall('one.marketapp.enable', $a, $b);
    }

    /**
     * Replaces the marketplace app template contents.
     *
     * @param int $a The object ID.
     * @param string $b The new template contents. Syntax can be the usual attribute=value or XML.
     * @param int $c Update type: 0: Replace the whole template. 1: Merge new template with the existing one.
     * @return \One\Resource
     */
    public function marketappUpdate(int $a, string $b, int $c) {
        return $this->makeCall('one.marketapp.update', $a, $b, $c);
    }

    /**
     * Changes the permission bits of a marketplace app.
     *
     * @param int $a The object ID.
     * @param int $b USER USE bit. If set to -1, it will not change.
     * @param int $c USER MANAGE bit. If set to -1, it will not change.
     * @param int $d USER ADMIN bit. If set to -1, it will not change.
     * @param int $e GROUP USE bit. If set to -1, it will not change.
     * @param int $f GROUP MANAGE bit. If set to -1, it will not change.
     * @param int $g GROUP ADMIN bit. If set to -1, it will not change.
     * @param int $h OTHER USE bit. If set to -1, it will not change.
     * @param int $i OTHER MANAGE bit. If set to -1, it will not change.
     * @param int $j OTHER ADMIN bit. If set to -1, it will not change.
     * @return \One\Resource
     */
    public function marketappChmod(int $a, int $b, int $c, int $d, int $e, int $f, int $g, int $h, int $i, int $j) {
        return $this->makeCall('one.marketapp.chmod', $a, $b, $c, $d, $e, $f, $g, $h, $i, $j);
    }

    /**
     * Changes the ownership of a marketplace app.
     *
     * @param int $a The object ID.
     * @param int $b The User ID of the new owner. If set to -1, the owner is not changed.
     * @param int $c The Group ID of the new group. If set to -1, the group is not changed.
     * @return \One\Resource
     */
    public function marketappChown(int $a, int $b, int $c) {
        return $this->makeCall('one.marketapp.chown', $a, $b, $c);
    }

    /**
     * Renames a marketplace app.
     *
     * @param int $a The object ID.
     * @param string $b The new name.
     * @return \One\Resource
     */
    public function marketappRename(int $a, string $b) {
        return $this->makeCall('one.marketapp.rename', $a, $b);
    }

    /**
     * Retrieves information for the marketplace app.
     *
     * @param int $a The object ID.
     * @param bool $b optional flag to decrypt contained secrets, valid only for admin
     * @return \One\Resource
     */
    public function marketappInfo(int $a, bool $b) {
        return $this->makeCall('one.marketapp.info', $a, $b);
    }

    /**
     * Locks a MarketPlaceApp. Lock certain actions depending on blocking level
     *
     * @param int $a The object ID.
     * @param int $b Lock level: use (1), manage (2), admin (3), all (4)
     * @return \One\Resource
     */
    public function marketappLock(int $a, int $b) {
        return $this->makeCall('one.marketapp.lock', $a, $b);
    }

    /**
     * Unlocks a MarketPlaceApp.
     *
     * @param int $a The object ID.
     * @return \One\Resource
     */
    public function marketappUnlock(int $a) {
        return $this->makeCall('one.marketapp.unlock', $a);
    }

    /**
     * Retrieves information for all or part of the marketplace apps in the pool.
     *
     * @param int $a Filter flag  -4: Resources belonging to the user's primary group  -3: Resources belonging to the user  -2: All resources  -1: Resources belonging to the user and any of his groups * &gt;= 0: UID User's Resources
     * @param int $b When the next parameter is &gt;= -1 this is the Range start ID. Can be -1. For smaller values this is the offset used for pagination.
     * @param int $c For values &gt;= -1 this is the Range end ID. Can be -1 to get until the last ID. For values &lt; -1 this is the page size used for pagination.
     * @return \One\Resource
     */
    public function marketapppoolInfo(int $a, int $b, int $c) {
        return $this->makeCall('one.marketapppool.info', $a, $b, $c);
    }

    /**
     * Allocates a new virtual router in OpenNebula.
     *
     * @param string $a A string containing the virtual router contents. Syntax can be the usual attribute=value or XML.
     * @return \One\Resource
     */
    public function vrouterAllocate(string $a) {
        return $this->makeCall('one.vrouter.allocate', $a);
    }

    /**
     * Deletes the given virtual router from the pool.
     *
     * @param int $a The object ID.
     * @param bool $b true to delete the virtual router plus any image defined in DISK.
     * @return \One\Resource
     */
    public function vrouterDelete(int $a, bool $b) {
        return $this->makeCall('one.vrouter.delete', $a, $b);
    }

    /**
     * Attaches a new network interface to the virtual router and the virtual machines
     *
     * @param int $a The object ID.
     * @param int $b Number of VMs to instantiate.
     * @param int $c VM Template id to instantiate.
     * @param string $d Name for the VM instances. If it is an empty string OpenNebula will set a default name. Wildcard %i can be used.
     * @param bool $e False to create the VM on pending (default), True to create it on hold.
     * @param string $f A string containing an extra template to be merged with the one being instantiated. It can be empty. Syntax can be the usual attribute=value or XML.
     * @return \One\Resource
     */
    public function vrouterInstantiate(int $a, int $b, int $c, string $d, bool $e, string $f) {
        return $this->makeCall('one.vrouter.instantiate', $a, $b, $c, $d, $e, $f);
    }

    /**
     * Detaches a network interface from the virtual router and the virtual machines
     *
     * @param int $a The object ID.
     * @param int $b The nic ID.
     * @return \One\Resource
     */
    public function vrouterDetachnic(int $a, int $b) {
        return $this->makeCall('one.vrouter.detachnic', $a, $b);
    }

    /**
     * Replaces the template contents.
     *
     * @param int $a The object ID.
     * @param string $b The new template contents. Syntax can be the usual attribute=value or XML.
     * @param int $c Update type: 0: replace the whole template. 1: Merge new template with the existing one.
     * @return \One\Resource
     */
    public function vrouterUpdate(int $a, string $b, int $c) {
        return $this->makeCall('one.vrouter.update', $a, $b, $c);
    }

    /**
     * Changes the permission bits of a virtual router.
     *
     * @param int $a The object ID.
     * @param int $b USER USE bit. If set to -1, it will not change.
     * @param int $c USER MANAGE bit. If set to -1, it will not change.
     * @param int $d USER ADMIN bit. If set to -1, it will not change.
     * @param int $e GROUP USE bit. If set to -1, it will not change.
     * @param int $f GROUP MANAGE bit. If set to -1, it will not change.
     * @param int $g GROUP ADMIN bit. If set to -1, it will not change.
     * @param int $h OTHER USE bit. If set to -1, it will not change.
     * @param int $i OTHER MANAGE bit. If set to -1, it will not change.
     * @param int $j OTHER ADMIN bit. If set to -1, it will not change.
     * @return \One\Resource
     */
    public function vrouterChmod(int $a, int $b, int $c, int $d, int $e, int $f, int $g, int $h, int $i, int $j) {
        return $this->makeCall('one.vrouter.chmod', $a, $b, $c, $d, $e, $f, $g, $h, $i, $j);
    }

    /**
     * Changes the ownership of a virtual router.
     *
     * @param int $a The object ID.
     * @param int $b The User ID of the new owner. If set to -1, the owner is not changed.
     * @param int $c The Group ID of the new group. If set to -1, the group is not changed.
     * @return \One\Resource
     */
    public function vrouterChown(int $a, int $b, int $c) {
        return $this->makeCall('one.vrouter.chown', $a, $b, $c);
    }

    /**
     * Renames a virtual router.
     *
     * @param int $a The object ID.
     * @param string $b The new name.
     * @return \One\Resource
     */
    public function vrouterRename(int $a, string $b) {
        return $this->makeCall('one.vrouter.rename', $a, $b);
    }

    /**
     * Retrieves information for the virtual router.
     *
     * @param int $a The object ID.
     * @param bool $b optional flag to decrypt contained secrets, valid only for admin
     * @return \One\Resource
     */
    public function vrouterInfo(int $a, bool $b) {
        return $this->makeCall('one.vrouter.info', $a, $b);
    }

    /**
     * Locks a Virtual Router. Lock certain actions depending on blocking level
     *
     * @param int $a The object ID.
     * @param int $b Lock level: use (1), manage (2), admin (3), all (4)
     * @return \One\Resource
     */
    public function vrouterLock(int $a, int $b) {
        return $this->makeCall('one.vrouter.lock', $a, $b);
    }

    /**
     * Unlocks a Virtual Router.
     *
     * @param int $a The object ID.
     * @return \One\Resource
     */
    public function vrouterUnlock(int $a) {
        return $this->makeCall('one.vrouter.unlock', $a);
    }

    /**
     * Retrieves information for all or part of the Resources in the pool.
     *
     * @param int $a Filter flag  -4: Resources belonging to the user's primary group  -3: Resources belonging to the user  -2: All resources  -1: Resources belonging to the user and any of his groups * &gt;= 0: UID User's Resources
     * @param int $b When the next parameter is &gt;= -1 this is the Range start ID. Can be -1. For smaller values this is the offset used for pagination.
     * @param int $c For values &gt;= -1 this is the Range end ID. Can be -1 to get until the last ID. For values &lt; -1 this is the page size used for pagination.
     * @return \One\Resource
     */
    public function vrouterpoolInfo(int $a, int $b, int $c) {
        return $this->makeCall('one.vrouterpool.info', $a, $b, $c);
    }

    /**
     * Allocates a new user in OpenNebula
     *
     * @param string $a username for the new user
     * @param string $b password for the new user
     * @param string $c authentication driver for the new user. If it is an empty string, then the default ('core') is used
     * @param array $d array of Group IDs. The first ID will be used as the main group. This array can be empty, in which case the default group will be used
     * @return \One\Resource
     */
    public function userAllocate(string $a, string $b, string $c, array $d) {
        return $this->makeCall('one.user.allocate', $a, $b, $c, $d);
    }

    /**
     * Deletes the given user from the pool.
     *
     * @param int $a The object ID.
     * @return \One\Resource
     */
    public function userDelete(int $a) {
        return $this->makeCall('one.user.delete', $a);
    }

    /**
     * Changes the password for the given user.
     *
     * @param int $a The object ID.
     * @param string $b The new password
     * @return \One\Resource
     */
    public function userPasswd(int $a, string $b) {
        return $this->makeCall('one.user.passwd', $a, $b);
    }

    /**
     * Generates or sets a login token.
     *
     * @param string $a The user name to generate the token for
     * @param string $b The token, if empty oned will generate one
     * @param int $c Valid period in seconds; 0 reset the token and -1 for a non-expiring token.
     * @param int $d Effective GID to use with this token. To use the current GID and user groups set it to -1
     * @return \One\Resource
     */
    public function userLogin(string $a, string $b, int $c, int $d) {
        return $this->makeCall('one.user.login', $a, $b, $c, $d);
    }

    /**
     * Replaces the user template contents.
     *
     * @param int $a The object ID.
     * @param string $b The new template contents. Syntax can be the usual attribute=value or XML.
     * @param int $c Update type: 0: Replace the whole template. 1: Merge new template with the existing one.
     * @return \One\Resource
     */
    public function userUpdate(int $a, string $b, int $c) {
        return $this->makeCall('one.user.update', $a, $b, $c);
    }

    /**
     * Changes the authentication driver and the password for the given user.
     *
     * @param int $a The object ID.
     * @param string $b The new authentication driver.
     * @param string $c The new password. If it is an empty string, the password is not changed.
     * @return \One\Resource
     */
    public function userChauth(int $a, string $b, string $c) {
        return $this->makeCall('one.user.chauth', $a, $b, $c);
    }

    /**
     * Sets the user quota limits.
     *
     * @param int $a The object ID.
     * @param string $b The new quota template contents. Syntax can be the usual attribute=value or XML.
     * @return \One\Resource
     */
    public function userQuota(int $a, string $b) {
        return $this->makeCall('one.user.quota', $a, $b);
    }

    /**
     * Changes the group of the given user.
     *
     * @param int $a The User ID.
     * @param int $b The Group ID of the new group.
     * @return \One\Resource
     */
    public function userChgrp(int $a, int $b) {
        return $this->makeCall('one.user.chgrp', $a, $b);
    }

    /**
     * Adds the User to a secondary group.
     *
     * @param int $a The User ID.
     * @param int $b The Group ID of the new group.
     * @return \One\Resource
     */
    public function userAddgroup(int $a, int $b) {
        return $this->makeCall('one.user.addgroup', $a, $b);
    }

    /**
     * Removes the User from a secondary group
     *
     * @param int $a The User ID.
     * @param int $b The Group ID.
     * @return \One\Resource
     */
    public function userDelgroup(int $a, int $b) {
        return $this->makeCall('one.user.delgroup', $a, $b);
    }

    /**
     * Retrieves information for the user.
     *
     * @param int $a The object ID. If it is -1, then the connected user's own info info is returned
     * @param bool $b optional flag to decrypt contained secrets, valid only for admin
     * @return \One\Resource
     */
    public function userInfo(int $a, bool $b) {
        return $this->makeCall('one.user.info', $a, $b);
    }

    /**
     * Retrieves information for all the users in the pool.
     *

     * @return \One\Resource
     */
    public function userpoolInfo() {
        return $this->makeCall('one.userpool.info', );
    }

    /**
     * Returns the default user quota limits.
     *

     * @return \One\Resource
     */
    public function userquotaInfo() {
        return $this->makeCall('one.userquota.info', );
    }

    /**
     * Updates the default user quota limits.
     *
     * @param string $a The new quota template contents. Syntax can be the usual attribute=value or XML.
     * @return \One\Resource
     */
    public function userquotaUpdate(string $a) {
        return $this->makeCall('one.userquota.update', $a);
    }

    /**
     * Allocates a new group in OpenNebula.
     *
     * @param string $a Name for the new group.
     * @return \One\Resource
     */
    public function groupAllocate(string $a) {
        return $this->makeCall('one.group.allocate', $a);
    }

    /**
     * Deletes the given group from the pool.
     *
     * @param int $a The object ID.
     * @return \One\Resource
     */
    public function groupDelete(int $a) {
        return $this->makeCall('one.group.delete', $a);
    }

    /**
     * Retrieves information for the group.
     *
     * @param int $a The object ID. If it is -1, then the connected user's group info info is returned
     * @param bool $b optional flag to decrypt contained secrets, valid only for admin
     * @return \One\Resource
     */
    public function groupInfo(int $a, bool $b) {
        return $this->makeCall('one.group.info', $a, $b);
    }

    /**
     * Replaces the group template contents.
     *
     * @param int $a The object ID.
     * @param string $b The new template contents. Syntax can be the usual attribute=value or XML.
     * @param int $c Update type: 0: Replace the whole template. 1: Merge new template with the existing one.
     * @return \One\Resource
     */
    public function groupUpdate(int $a, string $b, int $c) {
        return $this->makeCall('one.group.update', $a, $b, $c);
    }

    /**
     * Adds a User to the Group administrators set
     *
     * @param int $a The group ID.
     * @param int $b The user ID.
     * @return \One\Resource
     */
    public function groupAddadmin(int $a, int $b) {
        return $this->makeCall('one.group.addadmin', $a, $b);
    }

    /**
     * Removes a User from the Group administrators set
     *
     * @param int $a The group ID.
     * @param int $b The user ID.
     * @return \One\Resource
     */
    public function groupDeladmin(int $a, int $b) {
        return $this->makeCall('one.group.deladmin', $a, $b);
    }

    /**
     * Sets the group quota limits.
     *
     * @param int $a The object ID.
     * @param string $b The new quota template contents. Syntax can be the usual attribute=value or XML.
     * @return \One\Resource
     */
    public function groupQuota(int $a, string $b) {
        return $this->makeCall('one.group.quota', $a, $b);
    }

    /**
     * Retrieves information for all the groups in the pool.
     *

     * @return \One\Resource
     */
    public function grouppoolInfo() {
        return $this->makeCall('one.grouppool.info', );
    }

    /**
     * Returns the default group quota limits.
     *

     * @return \One\Resource
     */
    public function groupquotaInfo() {
        return $this->makeCall('one.groupquota.info', );
    }

    /**
     * Updates the default group quota limits.
     *
     * @param string $a The new quota template contents. Syntax can be the usual attribute=value or XML.
     * @return \One\Resource
     */
    public function groupquotaUpdate(string $a) {
        return $this->makeCall('one.groupquota.update', $a);
    }

    /**
     * Allocates a new VDC in OpenNebula.
     *
     * @param string $a A string containing the template of the VDC. Syntax can be the usual attribute=value or XML.
     * @param int $b The cluster ID. If it is -1, this virtual network won't be added to any cluster.
     * @return \One\Resource
     */
    public function vdcAllocate(string $a, int $b) {
        return $this->makeCall('one.vdc.allocate', $a, $b);
    }

    /**
     * Deletes the given VDC from the pool.
     *
     * @param int $a The object ID.
     * @return \One\Resource
     */
    public function vdcDelete(int $a) {
        return $this->makeCall('one.vdc.delete', $a);
    }

    /**
     * Replaces the VDC template contents.
     *
     * @param int $a The object ID.
     * @param string $b The new template contents. Syntax can be the usual attribute=value or XML.
     * @param int $c Update type: 0: Replace the whole template. 1: Merge new template with the existing one.
     * @return \One\Resource
     */
    public function vdcUpdate(int $a, string $b, int $c) {
        return $this->makeCall('one.vdc.update', $a, $b, $c);
    }

    /**
     * Renames a VDC.
     *
     * @param int $a The object ID.
     * @param string $b The new name.
     * @return \One\Resource
     */
    public function vdcRename(int $a, string $b) {
        return $this->makeCall('one.vdc.rename', $a, $b);
    }

    /**
     * Retrieves information for the VDC.
     *
     * @param int $a The object ID. If it is -1, then the connected user's VDC info info is returned
     * @param bool $b optional flag to decrypt contained secrets, valid only for admin
     * @return \One\Resource
     */
    public function vdcInfo(int $a, bool $b) {
        return $this->makeCall('one.vdc.info', $a, $b);
    }

    /**
     * Retrieves information for all the VDCs in the pool.
     *

     * @return \One\Resource
     */
    public function vdcpoolInfo() {
        return $this->makeCall('one.vdcpool.info', );
    }

    /**
     * Adds a group to the VDC
     *
     * @param int $a The VDC ID.
     * @param int $b The group ID.
     * @return \One\Resource
     */
    public function vdcAddgroup(int $a, int $b) {
        return $this->makeCall('one.vdc.addgroup', $a, $b);
    }

    /**
     * Deletes a group from the VDC
     *
     * @param int $a The VDC ID.
     * @param int $b The group ID.
     * @return \One\Resource
     */
    public function vdcDelgroup(int $a, int $b) {
        return $this->makeCall('one.vdc.delgroup', $a, $b);
    }

    /**
     * Adds a cluster to the VDC
     *
     * @param int $a The VDC ID.
     * @param int $b The Zone ID.
     * @param int $c The Cluster ID.
     * @return \One\Resource
     */
    public function vdcAddcluster(int $a, int $b, int $c) {
        return $this->makeCall('one.vdc.addcluster', $a, $b, $c);
    }

    /**
     * Deletes a cluster from the VDC
     *
     * @param int $a The VDC ID.
     * @param int $b The Zone ID.
     * @param int $c The Cluster ID.
     * @return \One\Resource
     */
    public function vdcDelcluster(int $a, int $b, int $c) {
        return $this->makeCall('one.vdc.delcluster', $a, $b, $c);
    }

    /**
     * Adds a host to the VDC
     *
     * @param int $a The VDC ID.
     * @param int $b The Zone ID.
     * @param int $c The Host ID.
     * @return \One\Resource
     */
    public function vdcAddhost(int $a, int $b, int $c) {
        return $this->makeCall('one.vdc.addhost', $a, $b, $c);
    }

    /**
     * Deletes a host from the VDC
     *
     * @param int $a The VDC ID.
     * @param int $b The Zone ID.
     * @param int $c The Host ID.
     * @return \One\Resource
     */
    public function vdcDelhost(int $a, int $b, int $c) {
        return $this->makeCall('one.vdc.delhost', $a, $b, $c);
    }

    /**
     * Adds a datastore to the VDC
     *
     * @param int $a The VDC ID.
     * @param int $b The Zone ID.
     * @param int $c The Datastore ID.
     * @return \One\Resource
     */
    public function vdcAdddatastore(int $a, int $b, int $c) {
        return $this->makeCall('one.vdc.adddatastore', $a, $b, $c);
    }

    /**
     * Deletes a datastore from the VDC
     *
     * @param int $a The VDC ID.
     * @param int $b The Zone ID.
     * @param int $c The Datastore ID.
     * @return \One\Resource
     */
    public function vdcDeldatastore(int $a, int $b, int $c) {
        return $this->makeCall('one.vdc.deldatastore', $a, $b, $c);
    }

    /**
     * Adds a vnet to the VDC
     *
     * @param int $a The VDC ID.
     * @param int $b The Zone ID.
     * @param int $c The Vnet ID.
     * @return \One\Resource
     */
    public function vdcAddvnet(int $a, int $b, int $c) {
        return $this->makeCall('one.vdc.addvnet', $a, $b, $c);
    }

    /**
     * Deletes a vnet from the VDC
     *
     * @param int $a The VDC ID.
     * @param int $b The Zone ID.
     * @param int $c The Vnet ID.
     * @return \One\Resource
     */
    public function vdcDelvnet(int $a, int $b, int $c) {
        return $this->makeCall('one.vdc.delvnet', $a, $b, $c);
    }

    /**
     * Allocates a new zone in OpenNebula.
     *
     * @param string $a A string containing the template of the zone. Syntax can be the usual attribute=value or XML.
     * @return \One\Resource
     */
    public function zoneAllocate(string $a) {
        return $this->makeCall('one.zone.allocate', $a);
    }

    /**
     * Deletes the given zone from the pool.
     *
     * @param int $a The object ID.
     * @return \One\Resource
     */
    public function zoneDelete(int $a) {
        return $this->makeCall('one.zone.delete', $a);
    }

    /**
     * Replaces the zone template contents.
     *
     * @param int $a The object ID.
     * @param string $b The new template contents. Syntax can be the usual attribute=value or XML.
     * @param int $c Update type: 0: Replace the whole template. 1: Merge new template with the existing one.
     * @return \One\Resource
     */
    public function zoneUpdate(int $a, string $b, int $c) {
        return $this->makeCall('one.zone.update', $a, $b, $c);
    }

    /**
     * Renames a zone.
     *
     * @param int $a The object ID.
     * @param string $b The new name.
     * @return \One\Resource
     */
    public function zoneRename(int $a, string $b) {
        return $this->makeCall('one.zone.rename', $a, $b);
    }

    /**
     * Retrieves information for the zone.
     *
     * @param int $a The object ID.
     * @param bool $b optional flag to decrypt contained secrets, valid only for admin
     * @return \One\Resource
     */
    public function zoneInfo(int $a, bool $b) {
        return $this->makeCall('one.zone.info', $a, $b);
    }

    /**
     * Retrieves raft status one servers.
     *

     * @return \One\Resource
     */
    public function zoneRaftstatus() {
        return $this->makeCall('one.zone.raftstatus', );
    }

    /**
     * Retrieves information for all the zones in the pool.
     *

     * @return \One\Resource
     */
    public function zonepoolInfo() {
        return $this->makeCall('one.zonepool.info', );
    }

    /**
     * Adds a new ACL rule.
     *
     * @param string $a User component of the new rule. A string containing a hex number.
     * @param string $b Resource component of the new rule. A string containing a hex number.
     * @param string $c Rights component of the new rule. A string containing a hex number.
     * @param string $d Optional zone component of the new rule. A string containing a hex number.
     * @return \One\Resource
     */
    public function aclAddrule(string $a, string $b, string $c, string $d) {
        return $this->makeCall('one.acl.addrule', $a, $b, $c, $d);
    }

    /**
     * Deletes an ACL rule.
     *
     * @param int $a ACL rule ID.
     * @return \One\Resource
     */
    public function aclDelrule(int $a) {
        return $this->makeCall('one.acl.delrule', $a);
    }

    /**
     * Returns the complete ACL rule set.
     *

     * @return \One\Resource
     */
    public function aclInfo() {
        return $this->makeCall('one.acl.info', );
    }

    /**
     * Allocates a new document in OpenNebula.
     *
     * @param string $a A string containing the document template contents. Syntax can be the usual attribute=value or XML.
     * @param int $b The document type (\*).
     * @return \One\Resource
     */
    public function documentAllocate(string $a, int $b) {
        return $this->makeCall('one.document.allocate', $a, $b);
    }

    /**
     * Clones an existing document.
     *
     * @param int $a The ID of the document to be cloned.
     * @param string $b Name for the new document.
     * @return \One\Resource
     */
    public function documentClone(int $a, string $b) {
        return $this->makeCall('one.document.clone', $a, $b);
    }

    /**
     * Deletes the given document from the pool.
     *
     * @param int $a The object ID.
     * @return \One\Resource
     */
    public function documentDelete(int $a) {
        return $this->makeCall('one.document.delete', $a);
    }

    /**
     * Replaces the document template contents.
     *
     * @param int $a The object ID.
     * @param string $b The new document template contents. Syntax can be the usual attribute=value or XML.
     * @param int $c Update type: 0: Replace the whole template. 1: Merge new template with the existing one.
     * @return \One\Resource
     */
    public function documentUpdate(int $a, string $b, int $c) {
        return $this->makeCall('one.document.update', $a, $b, $c);
    }

    /**
     * Changes the permission bits of a document.
     *
     * @param int $a The object ID.
     * @param int $b USER USE bit. If set to -1, it will not change.
     * @param int $c USER MANAGE bit. If set to -1, it will not change.
     * @param int $d USER ADMIN bit. If set to -1, it will not change.
     * @param int $e GROUP USE bit. If set to -1, it will not change.
     * @param int $f GROUP MANAGE bit. If set to -1, it will not change.
     * @param int $g GROUP ADMIN bit. If set to -1, it will not change.
     * @param int $h OTHER USE bit. If set to -1, it will not change.
     * @param int $i OTHER MANAGE bit. If set to -1, it will not change.
     * @param int $j OTHER ADMIN bit. If set to -1, it will not change.
     * @return \One\Resource
     */
    public function documentChmod(int $a, int $b, int $c, int $d, int $e, int $f, int $g, int $h, int $i, int $j) {
        return $this->makeCall('one.document.chmod', $a, $b, $c, $d, $e, $f, $g, $h, $i, $j);
    }

    /**
     * Changes the ownership of a document.
     *
     * @param int $a The object ID.
     * @param int $b The User ID of the new owner. If set to -1, the owner is not changed.
     * @param int $c The Group ID of the new group. If set to -1, the group is not changed.
     * @return \One\Resource
     */
    public function documentChown(int $a, int $b, int $c) {
        return $this->makeCall('one.document.chown', $a, $b, $c);
    }

    /**
     * Renames a document.
     *
     * @param int $a The object ID.
     * @param string $b The new name.
     * @return \One\Resource
     */
    public function documentRename(int $a, string $b) {
        return $this->makeCall('one.document.rename', $a, $b);
    }

    /**
     * Retrieves information for the document.
     *
     * @param int $a The object ID.
     * @param bool $b optional flag to decrypt contained secrets, valid only for admin
     * @return \One\Resource
     */
    public function documentInfo(int $a, bool $b) {
        return $this->makeCall('one.document.info', $a, $b);
    }

    /**
     * Locks a Document. Lock certain actions depending on blocking level:
     *
     * @param int $a The object ID.
     * @param int $b Lock level: use (1), manage (2), admin (3), all (4)
     * @return \One\Resource
     */
    public function documentLock(int $a, int $b) {
        return $this->makeCall('one.document.lock', $a, $b);
    }

    /**
     * Unlocks a Document.
     *
     * @param int $a The object ID.
     * @return \One\Resource
     */
    public function documentUnlock(int $a) {
        return $this->makeCall('one.document.unlock', $a);
    }

    /**
     * Retrieves information for all or part of the Resources in the pool.
     *
     * @param int $a Filter flag  -4: Resources belonging to the user's primary group  -3: Resources belonging to the user  -2: All resources  -1: Resources belonging to the user and any of his groups * &gt;= 0: UID User's Resources
     * @param int $b When the next parameter is &gt;= -1 this is the Range start ID. Can be -1. For smaller values this is the offset used for pagination.
     * @param int $c For values &gt;= -1 this is the Range end ID. Can be -1 to get until the last ID. For values &lt; -1 this is the page size used for pagination.
     * @param int $d The document type.
     * @return \One\Resource
     */
    public function documentpoolInfo(int $a, int $b, int $c, int $d) {
        return $this->makeCall('one.documentpool.info', $a, $b, $c, $d);
    }

    /**
     * Returns the OpenNebula core version
     *

     * @return \One\Resource
     */
    public function systemVersion() {
        return $this->makeCall('one.system.version', );
    }

    /**
     * Returns the OpenNebula configuration
     *

     * @return \One\Resource
     */
    public function systemConfig() {
        return $this->makeCall('one.system.config', );
    }

    /**
     * Allocates a new vntemplate in OpenNebula.
     *
     * @param string $a A string containing the vntemplate contents. Syntax can be the usual attribute=value or XML.
     * @return \One\Resource
     */
    public function vntemplateAllocate(string $a) {
        return $this->makeCall('one.vntemplate.allocate', $a);
    }

    /**
     * Clones an existing virtual network template.
     *
     * @param int $a The ID of the vntemplate to be cloned.
     * @param string $b Name for the new vntemplate.
     * @return \One\Resource
     */
    public function vntemplateClone(int $a, string $b) {
        return $this->makeCall('one.vntemplate.clone', $a, $b);
    }

    /**
     * Deletes the given vntemplate from the pool.
     *
     * @param int $a The object ID.
     * @return \One\Resource
     */
    public function vntemplateDelete(int $a) {
        return $this->makeCall('one.vntemplate.delete', $a);
    }

    /**
     * Replaces the vntemplate contents.
     *
     * @param int $a The object ID.
     * @param string $b Name for the new Virtual Network. If it is an empty string, OpenNebula will assign one automatically.
     * @param string $c A string containing an extra vntemplate to be merged with the one being instantiated. It can be empty. Syntax can be the usual attribute=value or XML.
     * @return \One\Resource
     */
    public function vntemplateInstantiate(int $a, string $b, string $c) {
        return $this->makeCall('one.vntemplate.instantiate', $a, $b, $c);
    }

    /**
     * Changes the permission bits of a vntemplate.
     *
     * @param int $a The object ID.
     * @param int $b USER USE bit. If set to -1, it will not change.
     * @param int $c USER MANAGE bit. If set to -1, it will not change.
     * @param int $d USER ADMIN bit. If set to -1, it will not change.
     * @param int $e GROUP USE bit. If set to -1, it will not change.
     * @param int $f GROUP MANAGE bit. If set to -1, it will not change.
     * @param int $g GROUP ADMIN bit. If set to -1, it will not change.
     * @param int $h OTHER USE bit. If set to -1, it will not change.
     * @param int $i OTHER MANAGE bit. If set to -1, it will not change.
     * @param int $j OTHER ADMIN bit. If set to -1, it will not change.
     * @return \One\Resource
     */
    public function vntemplateChmod(int $a, int $b, int $c, int $d, int $e, int $f, int $g, int $h, int $i, int $j) {
        return $this->makeCall('one.vntemplate.chmod', $a, $b, $c, $d, $e, $f, $g, $h, $i, $j);
    }

    /**
     * Changes the ownership of a vntemplate.
     *
     * @param int $a The object ID.
     * @param int $b The User ID of the new owner. If set to -1, the owner is not changed.
     * @param int $c The Group ID of the new group. If set to -1, the group is not changed.
     * @return \One\Resource
     */
    public function vntemplateChown(int $a, int $b, int $c) {
        return $this->makeCall('one.vntemplate.chown', $a, $b, $c);
    }

    /**
     * Renames a vntemplate.
     *
     * @param int $a The object ID.
     * @param string $b The new name.
     * @return \One\Resource
     */
    public function vntemplateRename(int $a, string $b) {
        return $this->makeCall('one.vntemplate.rename', $a, $b);
    }

    /**
     * Retrieves information for the vntemplate.
     *
     * @param int $a The object ID.
     * @param bool $b optional flag to decrypt contained secrets, valid only for admin
     * @return \One\Resource
     */
    public function vntemplateInfo(int $a, bool $b) {
        return $this->makeCall('one.vntemplate.info', $a, $b);
    }

    /**
     * Locks a vntemplate.
     *
     * @param int $a The object ID.
     * @param int $b Lock level: use (1), manage (2), admin (3), all (4)
     * @return \One\Resource
     */
    public function vntemplateLock(int $a, int $b) {
        return $this->makeCall('one.vntemplate.lock', $a, $b);
    }

    /**
     * Unlocks a vnemplate.
     *
     * @param int $a The object ID.
     * @return \One\Resource
     */
    public function vntemplateUnlock(int $a) {
        return $this->makeCall('one.vntemplate.unlock', $a);
    }

    /**
     * Retrieves information for all or part of the Resources in the pool.
     *
     * @param int $a Filter flag  -4: Resources belonging to the user's primary group  -3: Resources belonging to the user  -2: All resources  -1: Resources belonging to the user and any of his groups * &gt;= 0: UID User's Resources
     * @param int $b When the next parameter is &gt;= -1 this is the Range start ID. Can be -1. For smaller values this is the offset used for pagination.
     * @param int $c For values &gt;= -1 this is the Range end ID. Can be -1 to get until the last ID. For values &lt; -1 this is the page size used for pagination.
     * @return \One\Resource
     */
    public function vntemplatepoolInfo(int $a, int $b, int $c) {
        return $this->makeCall('one.vntemplatepool.info', $a, $b, $c);
    }

    /**
     * Allocates a new Hook in OpenNebula.
     *
     * @param string $a A string containing the hook contents. Syntax can be the usual attribute=value or XML.
     * @return \One\Resource
     */
    public function hookAllocate(string $a) {
        return $this->makeCall('one.hook.allocate', $a);
    }

    /**
     * Deletes the given hook from the pool.
     *
     * @param int $a The object ID.
     * @return \One\Resource
     */
    public function hookDelete(int $a) {
        return $this->makeCall('one.hook.delete', $a);
    }

    /**
     * Replaces the hook contents.
     *
     * @param int $a The object ID.
     * @param string $b The new hook contents. Syntax can be the usual attribute=value or XML.
     * @param int $c Update type: 0: replace the whole hook template. 1: Merge new hook template with the existing one.
     * @return \One\Resource
     */
    public function hookUpdate(int $a, string $b, int $c) {
        return $this->makeCall('one.hook.update', $a, $b, $c);
    }

    /**
     * Renames a hook.
     *
     * @param int $a The object ID.
     * @param string $b The new name.
     * @return \One\Resource
     */
    public function hookRename(int $a, string $b) {
        return $this->makeCall('one.hook.rename', $a, $b);
    }

    /**
     * Retrieves information for the hook.
     *
     * @param int $a The object ID.
     * @param bool $b optional flag to decrypt contained secrets, valid only for admin
     * @return \One\Resource
     */
    public function hookInfo(int $a, bool $b) {
        return $this->makeCall('one.hook.info', $a, $b);
    }

    /**
     * Locks a hook.
     *
     * @param int $a The object ID.
     * @param int $b Lock level: use (1), manage (2), admin (3), all (4)
     * @return \One\Resource
     */
    public function hookLock(int $a, int $b) {
        return $this->makeCall('one.hook.lock', $a, $b);
    }

    /**
     * Unlocks a hook.
     *
     * @param int $a The object ID.
     * @return \One\Resource
     */
    public function hookUnlock(int $a) {
        return $this->makeCall('one.hook.unlock', $a);
    }

    /**
     * Retries a hook execution.
     *
     * @param int $a The object ID.
     * @param int $b The execution ID.
     * @return \One\Resource
     */
    public function hookRetry(int $a, int $b) {
        return $this->makeCall('one.hook.retry', $a, $b);
    }

    /**
     * Retrieves information for all or part of the Resources in the pool.
     *
     * @param int $a Filter flag  -4: Resources belonging to the user's primary group  -3: Resources belonging to the user  -2: All resources  -1: Resources belonging to the user and any of his groups * &gt;= 0: UID User's Resources
     * @param int $b When the next parameter is &gt;= -1 this is the Range start ID. Can be -1. For smaller values this is the offset used for pagination.
     * @param int $c For values &gt;= -1 this is the Range end ID. Can be -1 to get until the last ID. For values &lt; -1 this is the page size used for pagination.
     * @return \One\Resource
     */
    public function hookpoolInfo(int $a, int $b, int $c) {
        return $this->makeCall('one.hookpool.info', $a, $b, $c);
    }

    /**
     * Retrieves information from the hook execution log.
     *
     * @param int $a Minimun date for filtering hook execution log records.
     * @param int $b Maximum date for filtering hook execution log records.
     * @param int $c Hook id for filtering hook execution log records.
     * @param int $d Hook execution return code (-1 ERROR, 0 ALL , 1 SUCCESS).
     * @return \One\Resource
     */
    public function hooklogInfo(int $a, int $b, int $c, int $d) {
        return $this->makeCall('one.hooklog.info', $a, $b, $c, $d);
    }

}
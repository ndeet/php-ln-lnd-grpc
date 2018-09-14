<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Lnrpc;

/**
 * The WalletUnlocker service is used to set up a wallet password for
 * lnd at first startup, and unlock a previously set up wallet.
 */
class WalletUnlockerClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * *
     * GenSeed is the first method that should be used to instantiate a new lnd
     * instance. This method allows a caller to generate a new aezeed cipher seed
     * given an optional passphrase. If provided, the passphrase will be necessary
     * to decrypt the cipherseed to expose the internal wallet seed.
     *
     * Once the cipherseed is obtained and verified by the user, the InitWallet
     * method should be used to commit the newly generated seed, and create the
     * wallet.
     * @param \Lnrpc\GenSeedRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GenSeed(\Lnrpc\GenSeedRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.WalletUnlocker/GenSeed',
        $argument,
        ['\Lnrpc\GenSeedResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * * 
     * InitWallet is used when lnd is starting up for the first time to fully
     * initialize the daemon and its internal wallet. At the very least a wallet
     * password must be provided. This will be used to encrypt sensitive material
     * on disk.
     *
     * In the case of a recovery scenario, the user can also specify their aezeed
     * mnemonic and passphrase. If set, then the daemon will use this prior state
     * to initialize its internal wallet.
     *
     * Alternatively, this can be used along with the GenSeed RPC to obtain a
     * seed, then present it to the user. Once it has been verified by the user,
     * the seed can be fed into this RPC in order to commit the new wallet.
     * @param \Lnrpc\InitWalletRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function InitWallet(\Lnrpc\InitWalletRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.WalletUnlocker/InitWallet',
        $argument,
        ['\Lnrpc\InitWalletResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * * lncli: `unlock`
     * UnlockWallet is used at startup of lnd to provide a password to unlock
     * the wallet database.
     * @param \Lnrpc\UnlockWalletRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UnlockWallet(\Lnrpc\UnlockWalletRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.WalletUnlocker/UnlockWallet',
        $argument,
        ['\Lnrpc\UnlockWalletResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * * lncli: `changepassword`
     * ChangePassword changes the password of the encrypted wallet. This will
     * automatically unlock the wallet database if successful.
     * @param \Lnrpc\ChangePasswordRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ChangePassword(\Lnrpc\ChangePasswordRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.WalletUnlocker/ChangePassword',
        $argument,
        ['\Lnrpc\ChangePasswordResponse', 'decode'],
        $metadata, $options);
    }

}

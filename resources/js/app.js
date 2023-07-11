import {
    EthereumClient,
    w3mConnectors,
    w3mProvider,
} from "@web3modal/ethereum";
import { Web3Modal } from "@web3modal/html";
import { configureChains, createConfig } from "@wagmi/core";
import { bsc } from "@wagmi/core/chains";

const chains = [bsc];
const projectId = "79ad375d4e1cf0fa0b7ffe63a32a0796";

const { publicClient } = configureChains(chains, [w3mProvider({ projectId })]);
const wagmiConfig = createConfig({
    autoConnect: true,
    connectors: w3mConnectors({ projectId, chains }),
    publicClient,
});
window.ethereumClient = new EthereumClient(wagmiConfig, chains);
window.web3modal = new Web3Modal({ projectId }, ethereumClient);
